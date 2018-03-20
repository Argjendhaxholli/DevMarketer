require('./bootstrap');
require('./manage');
require('./vue.min');
require('./main');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode ='rfc3986';

import Vue from 'vue';
import Buefy from 'buefy';
import VueClipboard from 'vue-clipboard2';
Vue.use(Buefy);
Vue.use(VueClipboard);

Vue.component('slug-widget', require('./components/slugWidget.vue').default);

const app = new Vue({
  el: '#app'
});
