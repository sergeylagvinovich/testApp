<template>
    <div class="row">
        <div class="col w-100">
            <b-overlay :show="getLoading">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th>Название отдела</th>
                        <th>Количество сотрудников отдела</th>
                        <th>Максимальная заработная плата среди сотрудников отдела</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item,index) in getData">
                        <td>{{item.name}}</td>
                        <td>{{item.countUsers}}</td>
                        <td>{{item.maxWaste}}</td>
                        <td>
                            <span class="material-icons-outlined" style="color: #10A581; cursor: pointer;" @click="goTo('DepartmentEdit',{id:item.id})">edit</span>
                            <span class="material-icons-outlined" style="cursor: pointer; color: red" @click="delDep(item.id)">delete</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </b-overlay>
        </div>
    </div>
</template>

<script>
import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import {mapActions, mapGetters} from "vuex";

export default {
    name: "UsersTable",
    computed:{
        ...mapGetters({
            'getLoading':'DepartmentTableModule/getLoading',
            'getData':'DepartmentTableModule/getData',
        }),
    },
    methods:{
        goTo(name,params){
            this.$router.push({name:name,params: params });
        },
        ...mapActions({
            'fetch':"DepartmentTableModule/fetch",
            'delDep':'DepartmentEdit/delDep',
        }),
        init(){
            this.fetch();
        }
    },
    mounted() {
        this.init();
    }
}
</script>

<style scoped>

</style>
