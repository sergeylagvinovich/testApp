import Vue from 'vue';
import VueRouter from 'vue-router';
import usersTable from "../components/Users/UsersTable";
import UserView from "../components/Users/UserView";
import DepartmentsTable from "../components/Departments/DepartmentsTable";
import DepartmentView from "../components/Departments/DepartmentView";

Vue.use(VueRouter);

let routes = [
    {
        path:'/users',
        component:usersTable,
        name:"UserTable",
    },
    {
        path:'/users/:id',
        component:UserView,
        name:"EditUser",
    },
    {
        path:'/departments',
        component:DepartmentsTable,
        name:"DepartmentsTable",
    },
    {
        path:'/departments/:id',
        component:DepartmentView,
        name:"DepartmentEdit",
    }
]

export const router =  new VueRouter({
    mode: 'history',
    routes
})
