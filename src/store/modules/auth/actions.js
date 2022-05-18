import axios from "axios";
import bcrypt from "bcryptjs";
let timer;

export default {
  async login(context, payload) {
    let url = "http://localhost/owc_project/src/api/Actions.php";
    // let url = "../../api/Actions.php";
    const res = await fetch(url, {
      method: "POST",
      body: payload,
    });
    const responseData = await res.json();
    // const error = new Error("Wrong 'username' or 'password' was entered!");
    const error = new Error("Zlé  'Používateľské meno'  alebo zlé  'Heslo' !");
    if (!responseData) {
      throw error;
    }
    let expiresIn = 0;
    if (
      responseData.email === payload.get("email") &&
      bcrypt.compareSync(payload.get("password"), responseData.pw)
    ) {
      expiresIn = 10800000; // 3h - autologout
      //expiresIn = 10000;
      const expirationDate = new Date().getTime() + expiresIn;

      localStorage.setItem("token", responseData.token);
      localStorage.setItem("role", responseData.role);
      localStorage.setItem("tokenExpiration", expirationDate);

      context.commit("setUser", {
        userId: responseData.username,
        token: responseData.token,
        userRole: responseData.role,
        isLoggedIn: true,
      });
    } else {
      throw error;
    }
    timer = setTimeout(() => {
      context.dispatch("autoLogout");
    }, expiresIn);
  },

  async autoLogin(context) {
    const token = localStorage.getItem("token");
    const role = localStorage.getItem("role");
    const tokenExpiration = localStorage.getItem("tokenExpiration");
    const expiresIn = +tokenExpiration - new Date().getTime();

    if (expiresIn < 0) {
      return;
    }

    const data = new FormData();
    data.append("role", role);
    data.append("token", token);
    data.append("action", "autologin");
    
    axios
      .post("http://localhost/owc_project/src/api/Actions.php", data)
      .then((res) => {
        timer = setTimeout(() => {
          context.dispatch("autoLogout");
        }, expiresIn);
        if (res.data.username && role && res.data.token === token) {
          context.commit("setUser", {
            token: token,
            userId: res.data.username,
            userRole: role,
            isLoggedIn: true,
          });
        } else {
          context.dispatch("autoLogout");
        }
      })
      .catch(() => {
        context.dispatch("autoLogout");
      });
  },

  logout(context) {
    localStorage.removeItem("token");
    localStorage.removeItem("role");
    localStorage.removeItem("tokenExpiration");

    clearTimeout(timer);

    context.commit("setUser", {
      userId: null,
      token: null,
      userRole: null,
      isLoggedIn: false,
    });
  },

  autoLogout(context) {
    context.dispatch("logout");
    context.commit("setAutoLogout");
  },

  async userRegistration(_, payload) {
    payload.set("password", bcrypt.hashSync(payload.get("password"), 10));
    // console.log(payload.get('oldUsername'));
    // console.log(payload.get('username'));
    // console.log(payload.get('oldEmail'));
    // console.log(payload.get('email'));
    // console.log(payload.get('//////////'));
    const res = await fetch(
      "http://localhost/owc_project/src/api/Actions.php",
      {
        method: "POST",
        body: payload,
      }
    );

    const responseData = await res.json();
    // console.log("RES: ", responseData);

    if (!res.ok) {
      throw new Error("Stala sa nejaká chyba, skúste znova!");
    }
    if (responseData === "username and email exists") {
      throw new Error(
        //"Entered 'Username' and 'Email' already exists, please choose another!"
        "Zadané 'Používateľské meno' a 'Email' sú obsadené!"
      );
    } else if (responseData === "username exists") {
      throw new Error(
        // "Entered 'Username' already exists, please choose another!"
        "Zadané 'Používateľské meno' je obsadené!"
      );
    } else if (responseData === "email exists") {
      throw new Error(
        // "Entered 'Email' already exists, please choose another!"
        "Zadaný 'Email' je obsadený!"
      );
    }
  },
};
