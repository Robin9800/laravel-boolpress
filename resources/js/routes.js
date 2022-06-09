import Vue from 'vue';
import VueRouter from 'vue-router';
import HomeComponent from './pages/HomeComponent';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    rputes:[
        {
            paths:'/',
            name: 'home',
            component: HomeComponent
        }
    ]
})