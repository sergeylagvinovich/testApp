import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import ToastModule from "./modules/ToastModule";
import UserTableModule from "./modules/Users/UserTableModule";
import UserEdit from "./modules/Users/UserEdit";
import DepartmentTableModule from "./modules/Departments/DepartmentTableModule";
import DepartmentEdit from "./modules/Departments/DepartmentEdit";

let modules = {
    ToastModule,
    UserTableModule,
    UserEdit,
    DepartmentTableModule,
    DepartmentEdit,
}

let store = new Vuex.Store({
    modules:modules
})

export default store
