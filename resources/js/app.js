
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');


 import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '72146366323ab1d0cfc2',
    cluster:'us2',
    encrypted: false
});


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/* Vue.component('example-component', require('./components/ExampleComponent').default); */
Vue.component('videosn', require('./components/Videos.vue').default);
Vue.component('notificaciones', require('./components/notificaciones.vue').default);
Vue.component('mensajes', require('./components/mensajes.vue').default);
/* require('./components/ExampleComponent.vue') */





const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
      }

});



/* compilar archivo :
npm run dev
 */







