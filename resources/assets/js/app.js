require('./bootstrap');
import Carousel from './components/Carousel.vue';
import Vue from 'vue';
Window.Vue = require('vue');

Vue.component('carousel', Carousel);
const app = new Vue({
    el: '#app'
});