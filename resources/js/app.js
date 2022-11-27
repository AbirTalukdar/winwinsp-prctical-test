import './bootstrap';
import { createApp } from 'vue';


const app = createApp({});

import AddCustomer from './components/AddCustomer.vue';
app.component('add-customer', AddCustomer);


app.mount('#app');
