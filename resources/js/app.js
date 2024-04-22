/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// import './bootstrap';
// import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

// const app = createApp({});

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

// app.mount('#app');




// import './bootstrap';
// require('../sass/app.scss');
// import Vue from 'vue';
// import VueRouter from 'vue-router';

// window.Vue = require('vue');

// // router
// Vue.use(VueRouter);

// // import home from './routes/home';
// // import about from './routes/about';
// const routes = [
//     { path: '/', component: require('./components/app.vue').default },
//     { path: '/about', component: require('./components/about.vue').default }
// ];

// const router = new VueRouter({
//     routes: routes,
//     mode: 'history'
// });

// import Example from "./components/ExampleComponent.vue";


// const app = new Vue({
//     components: {
//         Example,
//     }
// }).$mount('#app');



// Working code below
import './bootstrap';
import { createApp } from 'vue';
import {createRouter, createWebHistory} from 'vue-router';

import App from './App.vue';
import HomeView from './components/app.vue'
import AboutView from './components/about.vue'
import Users from './components/users.vue'

const router = createRouter({
    history: createWebHistory(),
    routes : [
        { path: '/', component: HomeView },
        { path: '/about', component: AboutView },
        { path: '/users', component: Users },
      ],
  })

createApp(App).use(router).mount("#app");