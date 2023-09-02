const state =  {
    fields: 1,
    div_inputs: '',
    div_self_input: 'border rounded border-1 d-flex flex-row align-items-center mb-4',
    left_icons: {
        class: [],
        style: 'margin-left: 10px;margin-right: 5px;'
    },
    input: {
        class: 'bg-transparent border rounded-0 border-0 shadow-none form-control',
        values: [],
        type: [],
        placeholder: [],
        names: [],
    },
    right_icons: {
        class: [],
        style: 'margin-right: 10px;cursor: pointer;'
    },
}

const getters = {
    get_count (state) {
        // state.count = rootState
        return state.count
    }
}

const mutations = {}
const actions = {}


export default {
    state,
    mutations,
    actions,
    getters
}

