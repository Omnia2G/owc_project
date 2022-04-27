import axios from "axios";
let timer;

export default { //dispatch
  async autoLogin(context) {
    const token = localStorage.getItem('token');
    const role = localStorage.getItem('role');
    const tokenExpiration = localStorage.getItem('tokenExpiration');
    const expiresIn = +tokenExpiration - new Date().getTime();
    
    if (expiresIn < 0) {
      return;
    }
  
    const data = new FormData();
      data.append("role", role);
      data.append("password", token);
      data.append("action", "autologin");

      let responseUserId = null;
      
    await axios
        .post("http://localhost/owc_project/src/api/Actions.php", data)
        .then((res) => {
          responseUserId = res.data.username;
        })
        .catch(() => {
          context.dispatch('autoLogout');
        });

    timer = setTimeout(() => {
      context.dispatch('autoLogout');
    }, expiresIn);
    //console.log("before SETUSER", responseUserId, token, role);
    if ( responseUserId && role) {
      context.commit("setUser", {
        token: token,
        userId: responseUserId,
        userRole: role,
        isLoggedIn: true,
      });
    }
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
