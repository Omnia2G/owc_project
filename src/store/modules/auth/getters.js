export default{
    userId(state){
        return state.userId;
    },
    token(state){
        return state.toekn;
    },
    isAuthenticated(state){
        return !!state.token;
    },
    didAutoLogout(state){
        return state.didAutoLogout;
    }
};