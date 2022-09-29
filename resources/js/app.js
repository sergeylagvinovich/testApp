import 'es6-promise/auto';

require('./bootstrap');

window.Vue = require('vue').default;
import {router} from "./routes/routes";
import store from './store/store';
Vue.component('page', require('./components/Page.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store:store
});
