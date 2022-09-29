<template>
    <span>
<!--        <button @click="check">ssss</button>-->
        <b-toast/>
    </span>
</template>

<script>
import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import { ToastPlugin } from 'bootstrap-vue'
Vue.use(ToastPlugin)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import {mapActions, mapMutations} from 'vuex';
export default {
    name: "ToastNotification",
    methods:{
        ...mapMutations({
            'setToast':'ToastModule/setToast',
        }),
        ...mapActions({
           'showToast':'ToastModule/showToast',
        }),
        check(){
            let toastData = {
                title:"Пользователи",
                message:"message",
                variant:'danger'
            };
          this.showToast(toastData);
        },
        init(){
            // console.log("init");
            // this.setToast(this.$root.$bvToast);
            // let toastData = {
            //     title:"Пользователи",
            //     message:"message",
            //     variant:'danger'
            // };
            // this.showToast(toastData);
        }
    },
    mounted(){
        this.init();
    }
}
</script>

<style scoped>

</style>
