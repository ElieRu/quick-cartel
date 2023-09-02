const state =  {
    name: 'Jean',
    count: 89
}
const mutations = {}
const actions = {}
const getters = {
    get_count (state) {
        // state.count = rootState
        return state.count
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}

