import { url } from '../../../js/url.js';
export default{
    async createNewTest(context, payload){
        const res = await fetch(url, {
          method: 'POST',
          body: payload,
        });
         const responseData = await res.json();
        
        if (!res.ok) {
          throw new Error("Stala sa nejaká chyba, skúste znova!");
        }
        if(responseData === 'Title exists for this course'){
          throw new Error("Tento titul už existuje pre tento kurz!");
        }
        if(payload.get('action') === 'editTest'){
          context.commit('updateTest', payload);
        }
    },

    async fetchTests(context, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Stala sa nejaká chyba pri inicializácií, skúste znova!");
      }
      const responseData = await res.json();
      context.commit('setTest', responseData);
    },

    deleteTest(context, payload){
      fetch(url, {
        method: 'POST',
        body: payload,
      });
      context.commit('deleteTest',payload.get('id'));
    },

    async fetchCompleteTest(context, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Stala sa nejaká chyba, skúste znova!");
      }
      const responseData = await res.json();
      context.commit('setCompleteTest', responseData);
    },

    async saveTestResults(_, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Stala sa nejaká chyba, skúste znova!");
      }
    },

    async testResults(context, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Stala sa nejaká chyba, skúste znova!");
      }
      const responseData = await res.json();
      context.commit('setResults', responseData);
    },

    updateResultsAfterUserDelete(context, payload){
      context.commit('deleteUserFromResults', payload);
    },

    async fetchMyTestResults(context, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Stala sa nejaká chyba, skúste znova!");
      }
      const responseData = await res.json();
      context.commit('setMyTestResults', responseData);
    },
};