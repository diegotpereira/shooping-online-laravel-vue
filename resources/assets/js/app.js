// import Vue from 'vue'

require('./bootstrap')

window.Vue = require('vue')

// window.Vue = require('vue')

window.axios = require('axios')

// import 'bootstrap-vue/dist/bootstrap-vue.css'

// import BootstrapVue from 'bootstrap-vue'

// Vue.use(BootstrapVue);

// Vue.component('painel-index', require('./components/painel/Painel.vue'))

// Carrinho
Vue.component('exibir-produto-com-variantes', require('./components/carrinho/ExibirProdutoComVariantes.vue'));
Vue.component('exibir-produto-sem-variante', require('./components/carrinho/ExibirProdutoSemVariante'));


const app = new Vue({
    el: '#app',
});