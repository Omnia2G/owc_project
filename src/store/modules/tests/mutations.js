export default{
    setTest(state, payload){
        state.test = payload;
    },
    deleteTest(state, payload){  
        let index = state.test.indexOf(state.test.find((test) => test.id == payload));
        state.test.splice(index, 1);
    },
    setCompleteTest(state, payload){
        state.completeTest = payload;
    },
    setResults(state, payload){
        //state.results.push(...payload);
        state.results = payload;
    }
};