export default{
    userId(state){
        return state.userId;
    },
    token(state){
        return state.token;
    },
    // isAuthenticated(state){
    //     return !!state.token;
    // },
    userRole(state){
        return state.userRole;
    },
    didAutoLogout(state){
        return state.didAutoLogout;
    },
    // isTeacher(state){
    //     return state.isTeacher;
    // },
    // isAdmin(state){
    //     return state.isAdmin;
    // },
    isLoggedIn(state){
        return state.isLoggedIn;
    }
};