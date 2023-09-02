
import { createStore } from "vuex"

import form_validation from "./modules/form_validation";
import module_b from "./modules/module_b";

const store = createStore ({
    modules: {
        a: form_validation,
        b: module_b
    },

    state: {
        student: {
            id: 1,
            name: 'John Doe',
            age: 13,
        },
        count: 10,
        number: 4
    },

    getters: {
        divider_getter (state) {
            return state.count / 2
        },

        // getters
        get_getter (state, getters) {
            return state.count + getters.divider_getter 
        },

        get_getter_params: (state, getters) => (nb) => {
            return state.count - nb
        },

        get_mut (state, mutations) {
            return state.number
        },

        
    },

    mutations: {
        increment (state) {
            state.number ++
        },
        decrement (state) {
            state.number --
        }
    },

    actions: {
        incrementAsync ({ commit }) {
            setTimeout(() => {
                commit('increment')
            }, 100)
        },
        decrementAsync ({ commit }) {
            setTimeout(() => {
                commit('decrement')
            }, 100)
        }
    }
})

store.commit({
    type: 'increment'
}, {
    type: 'decrement'
})

export default store


