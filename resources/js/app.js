require('./bootstrap');

import Vue from 'vue';

window.Vue = require('vue');

import Csv from './importCSV.vue';
Vue.component('Csv', Csv);

const app = new Vue({
    el: '#app'
});