/*
 * app.js
 *
 * @author Breno Pereira <breno.pereira@alumiar.me>
 * @package Flexpeak
 *
 */

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App from './Components/App'

import ExampleComponent from './Components/ExampleComponent'

import UserComponent from '../../../Users/Resources/Js/UserComponent'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: ExampleComponent
        },
        {
            path: '/users',
            name: 'users',
            component: UserComponent
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
