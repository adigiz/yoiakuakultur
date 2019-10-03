require('./bootstrap');

import Vue from 'vue';
import CardComponent from './components/CardComponent';

Vue.component('card-component', CardComponent);

const app = new Vue({
  el: '#app',
});