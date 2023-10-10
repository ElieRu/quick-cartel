
const state = {
    value: []
}

const getters = {
    atts: (state) => (param) => {
        return param
    },
    
    value: (state) => (param) => {
        let tmpValues = []

        for (let i = 0; i < param.value.length; i++) {
            tmpValues[param.name[i]] = param.value[i]
        }

        return Object.assign({}, tmpValues)
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

