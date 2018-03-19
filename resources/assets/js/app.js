require('./bootstrap');
require('./manage');
require('./vue.min');
require('./main');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode ='rfc3986';

import Vue from 'vue';
import Buefy from 'buefy';
Vue.use(Buefy);

Vue.component('slug-widget', require('./components/slugWidget.vue'));

const app = new Vue({
  el: '#app'
});
