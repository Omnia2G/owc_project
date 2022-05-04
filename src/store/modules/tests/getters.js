export default{
    getTests(state){
        return state.test;
    },
    hasTests(state){
        return state.test.length > 0;
    },
};