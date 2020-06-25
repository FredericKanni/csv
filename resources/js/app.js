require('./bootstrap');

import Vue from 'vue';

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

window.Vue = require('vue');
Vue.use(Vuetify);

import Csv from './importCSV.vue';
Vue.component('Csv', Csv);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({}),
});

export default new Vuetify(app);