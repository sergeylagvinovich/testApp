<template>
    <div class="row">
        <b-overlay :show="getLoading">
            <div class="col" v-if="!getLoading">
                <div class="row">
                    <div class="col-6">
                        <label class="col-form-label">Наименование отдела</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" v-model="dep.name">
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
    name: "DepartmentView",
    computed:{
        ...mapGetters({
            'getLoading':'DepartmentEdit/getLoading',
            'getData':'DepartmentEdit/getData',
        }),
        dep:{
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
            'setLoading':'DepartmentEdit/setLoading',
            'setData':'DepartmentEdit/setData',
        }),
        ...mapActions({
            'saveDep':'DepartmentEdit/saveDep',
            'fetch':'DepartmentEdit/fetch',
            'delDep':'DepartmentEdit/delDep',
        }),
        del(){
            this.delDep(this.$route.params.id)
        },
        save(){
          this.saveDep(this.$route.params.id)
        },
        init(){
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
