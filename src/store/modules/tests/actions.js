export default{
    async createNewTest(_, payload){
        const res = await fetch("http://localhost/owc_project/src/api/Actions.php", {
          method: 'POST',
          body: payload,
        });
         await res.json();
        
        if (!res.ok) {
          throw new Error("Something went wrong during the test creation, try again!");
        }
        if(res.data === 'title exists for this course'){
          throw new Error("This title exists for this course!");
        }
    },

    async fetchTests(context, payload){
      const res = await fetch("http://localhost/owc_project/src/api/Actions.php", {
        method: 'POST',
        body: payload,
      });
      if (!res.ok) {
        throw new Error("Something went wrong the test initialization, try again!");
      }
      const responseData = await res.json();
      context.commit('setTest', responseData);
    },

    deleteTest(context, payload){
      fetch("http://localhost/owc_project/src/api/Actions.php", {
        method: 'POST',
        body: payload,
      });
      context.commit('deleteTest',payload.get('id'));
    },
};