// import Vue from 'vue'

require('./bootstrap')

window.Vue = require('vue')

// window.Vue = require('vue')

window.axios = require('axios')

// import 'bootstrap-vue/dist/bootstrap-vue.css'

// import BootstrapVue from 'bootstrap-vue'

// Vue.use(BootstrapVue);

// Vue.component('painel-index', require('./components/painel/Painel.vue'))


const app = new Vue({
    el: '#app',
});