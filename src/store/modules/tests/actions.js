import { url } from '../../../js/url.js';
export default{
    async createNewTest(_, payload){
        const res = await fetch(url, {
          method: 'POST',
          body: payload,
        });
         const responseData = await res.json();
        
        if (!res.ok) {
          throw new Error("Something went wrong, try again!");
        }
        if(responseData === 'title exists for this course'){
          throw new Error("This title exists for this course!");
        }
    },

    async fetchTests(context, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Something went wrong with the test initialization, try again!");
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
        throw new Error("Something went wrong, try again!");
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
        throw new Error("Something went wrong, try again!");
      }
    },

    async testResults(context, payload){
      const res = await fetch(url, {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Something went wrong, try again!");
      }
      const responseData = await res.json();
      context.commit('setResults', responseData);
    },

};