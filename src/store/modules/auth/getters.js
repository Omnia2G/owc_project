export default{
    userId(state){
        return state.userId;
    },
    token(state){
        return state.token;
    },
    userRole(state){
        return state.userRole;
    },
    didAutoLogout(state){
        return state.didAutoLogout;
    },
    
    isLoggedIn(state){
        return state.isLoggedIn;
    },
    
};