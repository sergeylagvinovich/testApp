<template>
    <div class="container">
        <div>
            <ToastNotification/>
            <b-nav>
                <b-nav-item active>Главная</b-nav-item>
                <b-nav-item>Пользователи</b-nav-item>
                <b-nav-item>Отделы</b-nav-item>
            </b-nav>
        </div>
       <router-view></router-view>
    </div>
</template>

<script>
    import ToastNotification from "./ToastNotification";

    export default {
        name: "Page",
        components: {ToastNotification},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
@import "material-icons/iconfont/material-icons.css";
</style>
