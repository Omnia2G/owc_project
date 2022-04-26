export default{ //commit
    setUser(state, payload){
        state.userId = payload.userId;
        state.userRole = payload.userRole;
        state.isLoggedIn = payload.isLoggedIn;
        state.didAutoLogout = false;  
    },
    setAutoLogout(state){
        state.didAutoLogout = true;
    }
};