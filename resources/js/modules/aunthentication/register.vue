<template>
    <body class="d-flex flex-column justify-content-center" id="body-cont-auth">
        <div class="text-center" id="div-cont-form">
            <div id="div-img-logo" class="mt-4 mb-4"><i class="fas fa-code" style="font-size: 50px;"></i></div>
            <div class="text-start"><label class="form-label fs-4 text-start">Créer un compte</label>
                <!-- <form method="post" @submit.prevent="register(form)">
                <div id="carousel-1" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <callInput fields="2" leftIcons="['fas fa-chart-pie', 'fas fa-user']" placeholder="['Nom du compte', 'Adresse mail']" type="['text', 'email']" name="['name', 'email']"></callInput>
                            <div style="margin-top: -20px;"><label class="form-label text-primary">Formulaire incorrecte</label></div>
                            <div class="d-flex justify-content-end mb-4 mt-3"><a class="btn btn-primary btn-sm carousel-control-next" role="button" href="#carousel-1" data-bs-slide="next" style="position: relative;padding-right: 35px;padding-left: 35px;height: 30px;background: var(--bs-btn-border-color);opacity: 1;"><span aria-hidden="true">Suivant<span class="visually-hidden">Text</span></span></a></div>
                        </div>
                        <div class="carousel-item">
                            <callInput fields="2" leftIcons="['fas fa-lock', 'fas fa-lock']" placeholder="['Mot de passe', 'Confirmation']" type="['password', 'password']" name="['password', 'password_confirmation']"></callInput>
                            <div style="margin-top: -20px;"><label class="form-label text-primary">Formulaire incorrecte</label></div>
                            <div class="d-flex justify-content-between mb-4 mt-3"><a id="btn-prec" class="btn btn-primary btn-sm link-secondary carousel-control-prev" role="button" href="#carousel-1" data-bs-slide="prev"><span aria-hidden="true">Précédent<span class="visually-hidden">Text</span></span></a><button class="btn btn-primary btn-sm link-light" type="submit">Soumettre</button></div>
                        </div>
                    </div>
                </div>
            </form> -->
                <form @submit.prevent="register(form)">
                    <input type="text" name="name" v-model="form.name" placeholder="username"><br>
                    <input type="email" name="email" v-model="form.email" placeholder="email"><br>
                    <input type="password" v-model="form.password" name="password" placeholder="password"><br>
                    <input type="password" v-model="form.password_confirmation" name="password_confirmation"
                        placeholder="confirmation"><br>
                    <button type="submit" class="btn btn-primary validate">valider</button>
                </form>
                <ul>
                    <li v-for="error in errors">
                    <li v-for="item in error">{{ item }}</li>
                    </li>
                </ul>
            </div>
            <div class="mb-3">
                <p>Avez-vous un compte?&nbsp;<RouterLink :to="{ name: 'login' }">Connectez-vous</RouterLink>
                </p>
            </div>
        </div>
    </body>
</template>

<script  setup lang="ts">
import { ref } from 'vue'
import axios from "axios"
import router from '../../routes';


import callInput from '../components/input.vue'

// export default {
//     components: {
//         callInput
//     }
// }

interface RegisterPayload {
    name: String,
    email: String,
    password: String,
    password_confirmation: String
}

const form = ref({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
})

const errors = ref([])

async function register(payload: RegisterPayload) {
    await axios.post(`/register`, payload)
        .then(() => {
            router.push('/')
        }).catch((error) => {
            this.errors = error.response.data.errors
        })
}


</script>
