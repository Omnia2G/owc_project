import mutations from './mutations.js';
import actions from './actions.js';
import getters from './getters.js';

export default{
    state(){
        return{
            userId: null,
            token: null,
            userRole: null,
            // isTeacher: false,
            // isAdmin: false,
            isLoggedIn: false,
            didAutoLogout: false
        };
    },
    mutations,
    actions,
    getters
};
