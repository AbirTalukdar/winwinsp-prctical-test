import './bootstrap';
import { createApp } from 'vue';
// import cors from 'cors'


const app = createApp({});
// app.use(cors());
import AddCustomer from './components/AddCustomer.vue';
app.component('add-customer', AddCustomer);


app.mount('#app');
