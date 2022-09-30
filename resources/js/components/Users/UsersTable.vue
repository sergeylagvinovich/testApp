<template>
    <div class="row">
        <div class="col w-100">
            <b-overlay :show="getLoading">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Отчество</th>
                            <th>Пол</th>
                            <th>Заработная плата</th>
                            <th>Отделы</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item,index) in getData">
                            <td>{{item.name}}</td>
                            <td>{{item.lastName}}</td>
                            <td>{{item.patronymic}}</td>
                            <td>{{item.gender===1?"Мужской":"Женский"}}</td>
                            <td>{{item.wages}}</td>
                            <td>{{item.departments}}</td>
                            <td>
                                <span class="material-icons-outlined" style="color: #10A581; cursor: pointer;" @click="goTo('EditUser',{id:item.id})">edit</span>
                                <span class="material-icons-outlined" style="cursor: pointer; color: red" @click="deleteUser(item.id)">delete</span>
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

// Import Bootstrap and BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import {mapActions, mapGetters} from "vuex";

export default {
    name: "UsersTable",
    computed:{
        ...mapGetters({
            'getLoading':'UserTableModule/getLoading',
            'getData':'UserTableModule/getData',
        }),
    },
    methods:{
        goTo(name,params){
          this.$router.push({name:name,params: params });
        },
        ...mapActions({
            'fetch':"UserTableModule/fetch",
            'deleteUser':"UserEdit/deleteUser"
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
