export default{
    setUsers(state, payload){
        state.users = payload;
    },
    deleteUser(state, payload){
        let index = state.users.indexOf(state.users.find((user) => user.id == payload));
        state.users.splice(index, 1);
    },
};