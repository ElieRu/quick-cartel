
import { createStore } from "vuex"

import formDatas from "./modules/formDatas";
import requests from "./modules/requests";

const store = createStore ({
    modules: {
        atts: formDatas,
        requests: requests
    },

    state: {},

    getters: {},

})


export default store

