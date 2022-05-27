window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import VueRouter from 'vue-router'
import App from "./view/App";



window.Vue.use(VueRouter);

import Home from "./pages/Home";
import Posts from "./pages/Posts";

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path:"/",
            name: "home",
            componenet: Home
        },
        {
            path:"/posts",
            name: "posts",
            componenet: Posts
        },
    ],

})
const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
