import axios from 'axios';
import bcrypt from 'bcryptjs';
let timer;

export default { //dispatch
  async login(context, payload){
    let url = "http://localhost/owc_project/src/api/Actions.php";
    const res = await fetch(url, {
      method: 'POST',
      body: payload
    });
    const responseData = await res.json();
    const error = new Error("Wrong 'username' or 'password' was entered!");
    if (!res.ok) {
      throw error;
    }
    //console.log(responseData);
    let expiresIn = 0;
    if (
      responseData.username === payload.get('username') &&
      bcrypt.compareSync(payload.get('password'), responseData.pw)
    ) {
      expiresIn = 10800000; // 3h - autologout //// timer 7000 = 7s
      //expiresIn = 10000;
      const expirationDate = new Date().getTime() + expiresIn;

      localStorage.setItem('token', responseData.token);
      localStorage.setItem('role', responseData.role);
      localStorage.setItem('tokenExpiration', expirationDate); //expirationDate
      
      context.commit("setUser", {
        userId: responseData.username,
        token: responseData.token,
        userRole: responseData.role,
        isLoggedIn: true
      });
    } else {
      throw error;
    }
    timer = setTimeout(() => {
      context.dispatch('autoLogout');
    }, expiresIn);

  },

  

  autoLogin(context) {
    const token = localStorage.getItem('token');
    const role = localStorage.getItem('role');
    const tokenExpiration = localStorage.getItem('tokenExpiration');
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
            context.dispatch('autoLogout');
          }, expiresIn);
          //console.log("before SETUSER", responseUserId, token, role);
          if ( res.data.username && role && res.data.token === token) {
            context.commit("setUser", {
              token: token,
              userId: res.data.username,
              userRole: role,
              isLoggedIn: true,
            });
          }
        })
        .catch(() => {
          context.dispatch('autoLogout');
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
    context.dispatch('logout');
    context.commit('setAutoLogout');
  }
};
