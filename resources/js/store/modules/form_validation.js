
const state = {
    fields: 1,
    divInputs: '',
    divInput: 'border rounded border-1 d-flex flex-row align-items-center mb-4',
    leftIcons: {
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
    rightIcons: {
        class: [],
        style: 'margin-right: 10px;cursor: pointer;'
    },

    tmp: 44,

    render: ''
}

const mutations = {
    setAtts (state, test) {
        // state.fields = 2
        state.leftIcons.class = ["fas fa-user", "fas fa-lock"]
        state.type = ["email", "password"]
        state.name = ["email", "password"]
        state.placeholder = ["Adresse mail", "Mot de passe"]
        state.values = ["", ""]
        state.password_icon = ["", "fas fa-eye"]

        state.tmp = test.test
    }
}

const getters = {
    
}

const actions = {}

export default {
    state,
    mutations,
    actions,
    getters
}

