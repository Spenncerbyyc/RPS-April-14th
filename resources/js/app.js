require('./bootstrap');

window.Vue = require('vue');
Vue.component('App', require('./components/Root.vue').default);

const app = new Vue({
    el: '#app',
});
