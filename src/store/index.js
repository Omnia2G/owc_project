import { createStore } from 'vuex';
import authModule from './modules/auth/index.js';
import testModule from './modules/tests/index.js';
import adminpanelModule from './modules/adminpanel/index.js';

const store = createStore({
    modules:{
        auth: authModule,
        test: testModule,
        adminpanel: adminpanelModule,
    }
});

export default store;