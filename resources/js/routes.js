import Vue from 'vue'
import VueRouter from 'vue-router'
import home from './routes/home';
import about from './routes/about';

Vue.use(VueRouter);
export default new VueRouter({
    mode: 'history',
    scrollBehavior: (to, from, savedPosition) => ({ y: 0 }), 
    routes: [
        home,
        { path: '/about', componenet: require('./components/about.vue').default }
    ],
});