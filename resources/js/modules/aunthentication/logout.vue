<template>
    <div>logging out...</div>
    
</template>

<script>
import axios from 'axios';
import router from '../../routes';


export default {
    mounted() {
        this.callback()
        router.replace('/login')
    },

    methods: {
        async callback () {
            await axios.post(`logout`)
        }
    }
}

</script>

