import { url } from '../../../js/url.js';
export default {

    async loadAllUsers(context, payload){
    const res = await fetch(url, {
      method: 'POST',
      body: payload,
    });
    if (!res.ok) {
      throw new Error("Stala sa nejaká chyba, skúste znova!");
    }
    const responseData = await res.json();
    context.commit('setUsers', responseData);
  },

  deleteUser(context, payload){
     fetch(url, {
      method: 'POST',
      body: payload,
    });
    context.commit('deleteUser',payload.get('id'));
  },


}