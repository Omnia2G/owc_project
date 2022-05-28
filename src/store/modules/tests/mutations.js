export default {
  setTest(state, payload) {
    state.test = payload;
  },
  deleteTest(state, payload) {
    let index = state.test.indexOf(
      state.test.find((test) => test.id == payload)
    );
    state.test.splice(index, 1);
  },
  setCompleteTest(state, payload) {
    state.completeTest = payload;
  },
  setResults(state, payload) {
    state.results = payload;
  },
  updateTest(state, payload) {
    let tmpArr = [];
    let ids = JSON.parse(payload.get("ids"));
    let index = state.test.indexOf(
      state.test.find((test) => test.id == ids[0])
    );
    tmpArr["id"] = ids[0];
    tmpArr["username"] = payload.get("username");
    tmpArr["title"] = payload.get("title");
    tmpArr["course"] = payload.get("course");
    state.test[index] = tmpArr;
  },
};
