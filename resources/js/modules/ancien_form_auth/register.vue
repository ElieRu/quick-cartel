<template>
    <div>Welcom</div>
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
    <router-link to="/login">login</router-link>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import axios from "axios"
import router from '../routes';

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
            // console.log(error)
            this.errors = error.response.data.errors
        })
}

</script>

