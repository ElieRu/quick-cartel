const state =  {
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

    tmp: 4,

    render: ''
}

const getters = {
    // getForm: (state) => (fields, leftIcons, input, rightIcons) => {
    getForm: (state) => (fields) => {
        let myRender = ''

        // state.leftIcons.class = ["fas fa-user", "fas fa-lock"]

        console.log(state.tmp)

        for (let i = 0; i < fields; i++) {
            myRender += `<div>
                <div class="${state.divInput}">
                    <i class="${state.leftIcons.class[i]}" style="${state.leftIcons.style}"></i>
                    <input @click="clicked(i)" class="${state.input.class}" v-model="${state.values}" type="${state.type}"
                    placeholder="${state.placeholder}" name="${state.name}">
                    <i class="${state.password_icon}" @click="display_password(i)"
                    style="${state.rightIcons.style}"></i>
                </div>
            </div>`
        }

        return myRender
    }
}

const mutations = {
    setAtts (state) {
        // state.fields = 2
        state.leftIcons.class = ["fas fa-user", "fas fa-lock"]
        state.type = ["email", "password"]
        state.name = ["email", "password"]
        state.placeholder = ["Adresse mail", "Mot de passe"]
        state.values = ["", ""]
        state.password_icon = ["", "fas fa-eye"]

        state.tmp = 10
    }
}

const actions = {}

export default {
    state,
    mutations,
    actions,
    getters
}

