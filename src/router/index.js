import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../pages/views/HomeView.vue";
import AboutView from "../pages/views/AboutView.vue";
import RegistrationView from "../pages/views/RegistrationView.vue";
import LoginView from "../pages/views/LoginView.vue";
import NotFound from "../pages/NotFound.vue";
import CreateTestView from "../pages/views/CreateTestView.vue";
import AdminPanelView from "../pages/views/AdminPanelView.vue";
import VlcView from "../pages/views/VlcView.vue";
import OccView from "../pages/views/OccView.vue";
import IrcView from "../pages/views/IrcView.vue";
import FsoView from "../pages/views/FsoView.vue";
import UvcView from "../pages/views/UvcView.vue";
import LifiView from "../pages/views/LifiView.vue";

import store from "../store/index.js";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: "/", name: "home", component: HomeView },
    //{ path: '', name: '', component: }, //topics
    { path: '/vlc', name: 'vlc', component: VlcView },
    { path: '/occ', name: 'occ', component: OccView },
    { path: '/irc', name: 'irc', component: IrcView },
    { path: '/fso', name: 'fso', component: FsoView },
    { path: '/uvc', name: 'uvc', component: UvcView },
    { path: '/lifi', name: 'lifi', component: LifiView },
    { path: "/about", name: "about", component: AboutView },
    { path: "/login", name: "login", component: LoginView },
    { path: "/register", name: "register", component: RegistrationView },
    {
      path: "/createtest",
      name: "createtest",
      component: CreateTestView,
      meta: { requiresAuth: true,
        requiresTeacher: true
      },
    },
    {
      path: "/adminpanel",
      name: "adminpanel",
      component: AdminPanelView,
      meta: { requiresAuth: true, requiresAdmin: true },
    },
    { path: "/:notFound(.*)", component: NotFound },
  ],
});

// router.beforeEach((to, _, next) => {
//   if(to.meta.requiresAuth && !store.getters.isTeacher && !store.getters.isAdmin){ //store.getters.getUserRole
//     next('/login');
//   }
//   else if(to.meta.requiresAuth && to.meta.requiresAdmin && store.getters.isAdmin){
//     next();
//   }
//   else if(to.meta.requiresAuth && store.getters.isTeacher){
//     next();
//   }
//   else {
//     next();
//   }

// });

router.beforeEach((to, _, next) => {
  let role = store.getters.userRole;
  
  if (to.meta.requiresAuth) {
    if (!role) {
      router.replace('/login');
    } else {
      if (to.meta.requiresAdmin) {
        if (role === "admin") {
          return next();
        } else {
          router.replace('/login');
        }
      } else if (to.meta.requiresTeacher) {
        if (role === "teacher" || role === 'admin') {
          return next();
        } else {
          router.replace('/login');
        }
      }
    }
  } else {
    return next();
  }
});

export default router;
