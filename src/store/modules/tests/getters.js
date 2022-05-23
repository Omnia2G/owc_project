export default{
    getTests(state){
        return state.test;
    },
    hasTests(state){
        return state.test.length > 0;
    },
    getCompleteTest(state){
        return state.completeTest;
    },
    getResults(state){
        return state.results;
    },
};