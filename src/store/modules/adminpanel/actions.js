export default {

    async loadAllUsers(context, payload){
    const res = await fetch("http://localhost/owc_project/src/api/Actions.php", {
      method: 'POST',
      body: payload,
    });
    if (!res.ok) {
      throw new Error("Something went wrong during fetching users!");
    }
    const responseData = await res.json();
    context.commit('setUsers', responseData);
  },

}