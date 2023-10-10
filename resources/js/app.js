import './bootstrap';

import { createApp } from 'vue'

import store from './store/index.js'
import router from './routes'
import App from './app.vue'
import vuelidate from '@vuelidate/core'

const app = createApp(App)
app.use(router)
app.use(store)
app.use(vuelidate)

app.mount("#app")
