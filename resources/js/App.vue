<template>
    <div>
        <headerVue v-if="this.display()" />
        <router-view></router-view>
        <footerVue v-if="this.display()" />
    </div>
</template>

<script>

// import { router } from "router"

import footerVue from './layout/footer.vue'
import headerVue from './layout/header.vue'

export default {
    components: {
        footerVue,
        headerVue
    },

    methods: {
        display() {
            // return this.$route.name == "connection" || "register" ? false : true
            // return this.$route.name == "connection" ? false : true
        }
    },

    mounted() {
        // this.display = this.$route.name == 'login' ? false : true
    }
}
</script>

