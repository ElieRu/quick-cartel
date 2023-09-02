
import { createStore } from "vuex"

import formValid from "./modules/form_validation";
import module_b from "./modules/module_b";

const store = createStore ({
    modules: {
        formValid: formValid,
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
        getSetAtts (state) {
            return state.formValid.tmp
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
        big (state) {
            state.count += 20
        },
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
    type: 'big'
},{
    type: 'increment'
}, {
    type: 'decrement'
}, {
    type: 'setAtts'
})

export default store

