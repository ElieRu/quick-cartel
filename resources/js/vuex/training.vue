<template>
    <div>
        <h1>The training page <router-link to="test">Link to Test</router-link></h1>
        <h5>State</h5>
        Direct access : {{ this.$store.state.count }} <br>
        By computed function : {{ get_state }}
        
        <h5>Getters</h5>
        Direct accès to a getter : {{ this.$store.getters.get_getter }} <br>
        Computed init : {{ init_getter }} <br>
        Params : {{ get_getter_params }}
        <h5>Mutations</h5>
        Count : {{ this.$store.state.number }}
        <button @click="increment()">+</button>
        <button @click="decrement()">-</button>
        <h5>Actions</h5>
    </div>
</template>

<script>

import { mapState } from 'vuex'
import { mapGetters } from 'vuex'

export default {
    data() {
        return {
            local_count: 19,
            // count: 2
        }
    },

    // L'usage du mapGetters ne demande pas de modification
    // Seulement que les getters doivent etre utilisé
    // de manière direct sans autre chose à l'interieur
    // sinon c'est mieux de les initialiser dans des fonctions 
    // computed.

    computed: mapState({
        count: state => state.count,
        
        get_state (state) {
            return this.local_count + state.count
        },

        // getters...
        init_getter () {
            return this.$store.getters.get_getter
        },

        get_getter_params () {
            return this.$store.getters.get_getter_params(180)
        },

        // Les mutations
        get_mutation () {
            // The *store.commit('increment')* code must be added to
            // in the recine's file vuex
            return this.$store.getters.get_mut
        }
    }),

    methods: {
        increment () {
            this.$store.dispatch('incrementAsync')
        },
        decrement () {
            this.$store.dispatch('decrementAsync')
        }
    },
}


</script>
