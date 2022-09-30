<template>
    <div class="row">
        <b-overlay :show="getLoading">
            <div class="col" v-if="!getLoading">
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Имя</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" v-model="user.name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Фамилия</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" v-model="user.lastName">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Отчество</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" v-model="user.patronymic">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Пол</label>
                    </div>
                    <div class="col-6">
                        <select class="form-control" v-model="user.gender">
                            <option :value="1">Мужской</option>
                            <option :value="2">Женский</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Заработная плата</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" v-model="user.wages">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Отделы</label>
                    </div>
                    <div class="col-6">
                        <span v-for="item in getDep">
                            <label>{{item.name}}</label>
                            <input type="checkbox"
                                   name="departments"
                                   :value="item"
                                   v-model="user.departments"
                            >
                        </span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-right">
                        <button class="btn btn-success" @click="save">Сохранить</button>
                        <button class="btn btn-danger" @click="del">Удалить</button>
                    </div>
                </div>
            </div>
        </b-overlay>
    </div>
</template>

<script>
import {mapActions, mapGetters, mapMutations} from "vuex";

export default {
    name: "UserView",
    computed:{
        ...mapGetters({
            'getLoading':'UserEdit/getLoading',
            'getData':'UserEdit/getData',
            'getDep':'UserEdit/getDepartments',
        }),
        user:{
            get() {
                return this.getData;
            },
            set(value){
                this.setData(value);
            }
        }
    },
    methods:{
        ...mapMutations({
            'setLoading':'UserEdit/setLoading',
            'setData':'UserEdit/setData',
        }),
        ...mapActions({
            'saveUser':'UserEdit/saveUser',
            'fetch':'UserEdit/fetch',
            'deleteUser':"UserEdit/deleteUser",
            'fetchDeps':"UserEdit/fetchDep",
        }),
        del(){
            this.deleteUser(this.$route.params.id)
        },
        save(){
            this.saveUser(this.$route.params.id)
        },
        init(){
            this.fetchDeps();
            this.fetch(this.$route.params.id);
        }
    },
    mounted() {
        this.init();
    }

}
</script>

<style scoped>

</style>
