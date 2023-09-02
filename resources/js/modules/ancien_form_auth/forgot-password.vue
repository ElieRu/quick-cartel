<template>
    <div>Reset password</div>
    <form @submit.prevent="forgotPassword(form)">
        <input type="email" v-model="form.email" name="email">
        <button type="submit">Reset</button>
    </form>
    <ul>
        <li v-for="error in errors">
        <li v-for="item in error">{{ item }}</li>
        </li>
    </ul>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import axios from "axios"
import router from '../routes';

interface ForgotPayload {
    email: String
}

const form = ref({
    email: ""
})

const errors = ref([])

async function forgotPassword(payload: ForgotPayload) {
    await axios.post(`forgot-password`, payload)
        .then(() => {
            router.push('/send-instructions')
        }).catch((error) => {
            this.errors = error.response.data.errors
        })
}

</script>

