export default{
    async newTest(context, payload){
        const res = await fetch("http://localhost/owc_project/src/api/Actions.php", {
          method: 'POST',
          body: payload,
        });
        const responseData = await res.json();
        console.log('response: ', responseData);
    },
};