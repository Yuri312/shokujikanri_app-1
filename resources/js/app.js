/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import LoginComponent from "./components/LoginComponent";
import UserRegistrationComponent from "./components/UserRegistrationComponent";
import UserCompleteComponent from "./components/UserCompleteComponent";
import UserIndexComponent from "./components/UserIndexComponent";
import RecordEditComponent from "./components/RecordEditComponent";
import RecordUploadComponent from "./components/RecordUploadComponent";
import modal from '/components/parts/modal'


window.Vue = require('vue');

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: LoginComponent
        },
        {
            path: '/registration',
            name: 'registration',
            component: UserRegistrationComponent
        },
        {
            path: '/complete',
            name: 'complete',
            component: UserCompleteComponent
        },
        {
            path: '/index',
            name: 'index',
            component: UserIndexComponent
        },
        {
            path: '/edit',
            name: 'edit',
            component: RecordEditComponent
        },
        {
            path: '/upload',
            name: 'upload',
            component: RecordUploadComponent
        },
    ]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);
Vue.component('login-component', LoginComponent);
Vue.component('modal', modal)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router,
});
