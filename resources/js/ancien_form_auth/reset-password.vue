<template>
    <div>Reset password</div>
    <form @submit.prevent="resetPassword(form)">
        <input type="password" v-model="form.password" name="password"> <br>
        <input type="password" v-model="form.password_confirmation" name="password_confirmation"> <br>
        <button type="submit">Reset</button>
    </form>
    <ul>
        <li v-for="error in errors">
        <li v-for="item in error">{{ item }}</li>
        </li>
    </ul>
</template>

<script setup lang="ts">
import { onMounted, ref } from 'vue'
import axios from "axios"
import router from '../routes';

interface ForgotPayload {
    password: String
    password_confirmation: String,
}

const form = ref({
    email: router.currentRoute.value.query.email,
    password: "",
    password_confirmation: "",
    token: router.currentRoute.value.query.token
})

const errors = ref([])

async function resetPassword(payload: ForgotPayload) {
    await axios.post(`reset-password`, payload)
        .then(() => {
            router.push('/login')
        }).catch((error) => {
            this.errors = error.response.data.errors
        })
}

</script>

