<template>
    <div>My infos</div>
    Name: {{ user?.name }} <br>
    Email: {{ user?.email }}
    <button @click="openLogout()">Logout</button>
</template>

<script setup>

import { ref, onMounted } from 'vue'
import router from '../routes';
import axios from 'axios';

const user = ref()
onMounted(async () => {
    // try {
        const data = await axios.get(`api/user`)
        // user.value = data.data    
        console.log(value.response)
    // } catch (error) {
    //     console.log('no data')
    // }
})

function openLogout() {
    router.push('/logout')
}

</script>

