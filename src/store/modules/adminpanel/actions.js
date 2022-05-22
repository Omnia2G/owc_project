export default {

    async loadAllUsers(context, payload){
    // const res = await fetch("http://localhost/owc_project/src/api/Actions.php", {
    const res = await fetch("https://orosz.marketingy.eu/owc_project/src/api/Actions.php", {
      method: 'POST',
      body: payload,
    });
    if (!res.ok) {
      throw new Error("Something went wrong during fetching users!");
    }
    const responseData = await res.json();
    context.commit('setUsers', responseData);
  },

  deleteUser(context, payload){
    //  fetch("http://localhost/owc_project/src/api/Actions.php", {
     fetch("https://orosz.marketingy.eu/owc_project/src/api/Actions.php", {
      method: 'POST',
      body: payload,
    });
    context.commit('deleteUser',payload.get('id'));
  },


}