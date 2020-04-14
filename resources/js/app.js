require('./bootstrap');

window.Vue = require('vue');
Vue.component('App', require('./components/RPSroot.vue').default);

const app = new Vue({
    el: '#app',
});
