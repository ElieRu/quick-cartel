<template>
    <div>login</div>
    <form @submit.prevent="login(form)">
        <input type="email" v-model="form.email" name="email"> <br>
        <input type="password" v-model="form.password" name="password"> <br>
        <button type="submit">login</button>
    </form>
    <ul>
        <li v-for="error in errors">
        <li v-for="item in error">{{ item }}</li>
        </li>
    </ul>
    <router-link to="/register">Register</router-link> <br>
    <router-link to="/forgot-password">Forgot password</router-link>
</template>

<script setup lang="ts">
import axios from 'axios';
import { ref } from 'vue'
import router from '../routes';

interface LoginPayload {
    email: String,
    password: String
}

const form = ref({
    email: "",
    password: ""
})

const errors = ref([])

async function login(payload: LoginPayload) {
    await axios.post(`login`, payload)
        .then(() => {
            router.push('/')
        }).catch((error) => {
            this.errors = error.response.data.errors
        })
}

</script>

