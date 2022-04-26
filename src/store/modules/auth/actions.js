let timer;

export default { //dispatch
  autoLogin(context) {
    const userId = localStorage.getItem("userId");
    //const token = localStorage.getItem("token");
    const role = localStorage.getItem("role");
    const tokenExpiration = localStorage.getItem('tokenExpiration');

    const expiresIn = +tokenExpiration - new Date().getTime();

    if (expiresIn < 0) {
      return;
    }
    
    timer = setTimeout(() => {
      context.dispatch('autoLogout');
    }, expiresIn);

    if ( userId && role) {
      context.commit("setUser", {
        //token: token,
        userId: userId,
        userRole: role,
        isLoggedIn: true,
      });
    }
  },
  logout(context) {
    //this.$store.dispatch('logout');

    localStorage.removeItem("userId");
    //localStorage.removeItem("token");
    localStorage.removeItem("role");
    localStorage.removeItem("tokenExpiration");

    clearTimeout(timer);

    context.commit("setUser", {
      userId: null,
      //token: null,
      userRole: null,
      isLoggedIn: false,
    });
  },
  autoLogout(context) {
    context.dispatch('logout');
    context.commit('setAutoLogout');
  }
};
