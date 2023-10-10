
import axios from 'axios'

const state = {}

const mutations = {}
const actions = {}
const getters = {
    postRequest () {
        axios.post(`/api/account_register`, this.$store.state.value)
        .then(() => {
            this.link = 'href'
            this.value = '#carousel-1'
        }).catch((error) => {
            if (error.response && error.response.status === 422) {
                // Traiter l'erreur 422 ici
                // console.log(error.response.data);
            }
            this.label1 = 'Formulaire incorrecte'
        })
    }
}


export default {
    state,
    mutations,
    actions,
    getters
}

