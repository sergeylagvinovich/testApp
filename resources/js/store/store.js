import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import ToastModule from "./modules/ToastModule";
import UserTableModule from "./modules/Users/UserTableModule";

let modules = {
    ToastModule,
    UserTableModule
}

let store = new Vuex.Store({
    modules:modules
})

export default store
