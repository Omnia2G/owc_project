import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../pages/views/HomeView.vue';
import AboutView from '../pages/views/AboutView.vue';
import RegistrationView from '../pages/views/RegistrationView.vue';
import LoginView from '../pages/views/LoginView.vue';
import NotFound from '../pages/NotFound.vue';



const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', name: 'home', component: HomeView},
    { path: '/about', name: 'about',  component: AboutView },
    { path: '/login', name: 'login',  component: LoginView },
    { path: '/register', name: 'register',  component: RegistrationView },
    { path: '/:notFound(.*)', component: NotFound }
  ]
})

export default router
