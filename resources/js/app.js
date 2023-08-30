require('./bootstrap')
import { createApp } from 'vue';
import { createPinia } from 'pinia'; // Importa la instancia de pinia
import router from './router';
import App from './components/App.vue';

const app = createApp(App);
const pinia = createPinia();

app.use(router);
app.use(pinia); // Usa pinia

app.mount('#app');