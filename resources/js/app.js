require('./bootstrap');

import Vue from 'vue';
import ProductPage from './components/product-page.vue';

new Vue({
    el: '#app-container',  
    components: {ProductPage},
}); 
