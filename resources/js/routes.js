import { createWebHistory, createRouter } from "vue-router";

// Authentication
import register from './aunthentication/register.vue';
import login from './aunthentication/login.vue';
import logout from './aunthentication/logout.vue';
import forgot_password from './aunthentication/forgot-password.vue';
import reset_password from './aunthentication/reset-password.vue';
import send_instructions from './aunthentication/send-instructions.vue';

// Training vuex
import training from './vuex/training.vue';
import test from './vuex/test.vue';

// Pages
import accueil from "./pages/accueil.vue"

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
    
    // VUEX TRAINING...
    { path: '/training', name: 'training', component: training },
    { path: '/test', name: 'test', component: test },

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

