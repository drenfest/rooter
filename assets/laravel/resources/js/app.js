
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 //const files = require.context('./', true, /\.vue$/i);
 //files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
Vue.component( 'rooter-header-top-bar' ,require('./components/RooterHeaderTopBar.vue').default);
Vue.component( 'rooter-header-bottom-bar' ,require('./components/RooterHeaderBottomBar.vue').default);
Vue.component( 'rooter-specials' ,require('./components/RooterSpecials.vue').default);
Vue.component( 'rooter-Cta1' ,require('./components/RooterCta1.vue').default);
Vue.component( 'rooter-areas-served' ,require('./components/RooterAreasServed.vue').default);
Vue.component( 'rooter-ratings' ,require('./components/RooterRatings.vue').default);
Vue.component( 'rooter-footer' ,require('./components/RooterFooter.vue').default);
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
