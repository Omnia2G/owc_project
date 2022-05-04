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

    async displayTestsInTopics(context, payload){
      const res = await fetch("http://localhost/owc_project/src/api/Actions.php", {
          method: 'POST',
          body: payload,
        });
        const responseData = await res.json();
        //console.log(responseData);
        
        context.commit('setTest', responseData);
    },
};