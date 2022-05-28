export default {
  setUsers(state, payload) {
    state.users = payload;
  },
  deleteUser(state, payload) {
    let index = state.users.indexOf(
      state.users.find((user) => user.id == payload)
    );
    state.users.splice(index, 1);
  },
  updateUser(state, payload) {
    let index = state.users.indexOf(
      state.users.find((user) => user.id == payload.get("id"))
    );
    let tmpUserArray = [];
    tmpUserArray["id"] = +payload.get("id"); //+ convert string to int
    tmpUserArray["firstname"] = payload.get("firstname");
    tmpUserArray["lastname"] = payload.get("lastname");
    tmpUserArray["username"] = payload.get("username");
    tmpUserArray["email"] = payload.get("email");
    tmpUserArray["pw"] = payload.get("pw");
    tmpUserArray["role"] = payload.get("role");
    tmpUserArray["token"] = payload.get("token");
    
    if (index) { //edit
        state.users[index] = tmpUserArray;
    }
    if(index < 0 && state.users.length != 0) { 
        state.users[state.users.length] = tmpUserArray;
    }
  },
};
