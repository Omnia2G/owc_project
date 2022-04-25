import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../pages/views/HomeView.vue';
import AboutView from '../pages/views/AboutView.vue';
import RegistrationView from '../pages/views/RegistrationView.vue';
import LoginView from '../pages/views/LoginView.vue';
import NotFound from '../pages/NotFound.vue';
import CreateTestView from '../pages/views/CreateTestView.vue';
import AdminPanelView from '../pages/views/AdminPanelView.vue';

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', name: 'home', component: HomeView},
    //{ path: '', name: '', component: }, //topics
    { path: '/about', name: 'about',  component: AboutView },
    { path: '/login', name: 'login',  component: LoginView },
    { path: '/register', name: 'register',  component: RegistrationView },
    { path: '/createtest', name: 'createtest', component: CreateTestView, meta: {requiresAuth: false} },
    { path: '/adminpanel', name: 'adminpanel', component: AdminPanelView, meta: {requiresAuth: false} },
    { path: '/:notFound(.*)', component: NotFound }
  ]
})

// router.beforeEach((to, _, next) => {
//   if(to.meta.requiresAuth){ //store.getters.getUserRole
//     next('/create_test');
//   }
//   if(to.meta.requiresAuth){
//     next('/adminpanel');
//   }
//   else{
//     next('/');
//   }
// });

export default router
