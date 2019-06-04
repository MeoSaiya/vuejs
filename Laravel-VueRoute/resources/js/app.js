require('./bootstrap');
import VueRouter from 'vue-router';
import { routes }  from './routes';

window.Vue = require('vue');
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'hash',
    routes
});

const app = new Vue({
    el: '#app',
    router
});
