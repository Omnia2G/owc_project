import { createStore } from 'vuex';
import authModule from './modules/auth/index.js';
import testModule from './modules/tests/index.js';

const store = createStore({
    modules:{
        auth: authModule,
        test: testModule
    }
});



export default store;