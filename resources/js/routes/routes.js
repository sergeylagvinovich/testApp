import Vue from 'vue';
import VueRouter from 'vue-router';
import usersTable from "../components/Users/UsersTable";

Vue.use(VueRouter);

let routes = [
    {
        path:'/users',
        component:usersTable
    },
]

export const router =  new VueRouter({
    mode: 'history',
    routes
})
