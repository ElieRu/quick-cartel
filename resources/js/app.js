import './bootstrap';

import { createApp } from 'vue'

import store from './store/index.js'
import router from './routes'
import App from './app.vue'

const app = createApp(App)
app.use(router)
app.use(store)
app.mount("#app")
