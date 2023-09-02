import { createWebHistory, createRouter } from "vue-router";

// Authentication
import register from "./modules/aunthentication/register.vue";
import login from './modules/aunthentication/login.vue';
import logout from './modules/aunthentication/logout.vue';
import forgot_password from './modules/aunthentication/forgot-password.vue';
import reset_password from './modules/aunthentication/reset-password.vue';
import send_instructions from './modules/aunthentication/send-instructions.vue';

// Pages
import accueil from "./modules/accueil.vue"

const routes = [
    
    // Authentification
    { path: '/register', name: 'register', component: register },
    { path: '/login', name: 'login', component: login },
    { path: '/logout', name: 'logout', component: logout },
    { path: '/forgot-password', name: 'forgot_password', component: forgot_password },
    { path: '/reset-password', name: 'reset_password', component: reset_password },
    { path: '/send-instructions', name: 'send_instructions', component: send_instructions },

    // Pages
    { path: '/', name: 'accueil', component: accueil },
    
    
    // 
    // { path: '/categories', name: 'categories', component: categories },
    // { path: '/creation-du-compte', name: 'infosDAcceuil', component: informationsDAcceuil },
    // { path: '/creation-nouveau-mot-de-passe', name: 'creationNouveauMotDePasse', component: mdpOublie },
    // { path: '/mot-de-passe-oublie', name: 'motDePasseOublie', component: minuteur },

];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;

