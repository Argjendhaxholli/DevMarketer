require('./bootstrap');
require('./manage');
require('./vue.min');
require('./main');

window.Vue = require('vue');
import Vue from 'vue';
import Buefy from 'buefy';

Vue.use(Buefy);

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
