import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter);
import HomeComponent from './pages/HomeComponent';

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

export default router;