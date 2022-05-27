window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import App from "./view/App";
import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "./"

Vue.use(VueRouter)

const app = new Vue({
    el: '#root',
    routes: [
        {
            path:"/",
            name: "home",
            componenet: "Home"
        },
        {
            path:"/posts",
            name: "posts",
            componenet: "Posts"
        },
    ],
    render: h => h(App),

});
