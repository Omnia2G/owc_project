export default{
    getUsers(state){
        return state.users;
    },
    hasUsers(state){
        return state.users.length > 0;
    },
};