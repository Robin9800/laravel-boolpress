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
        },
        {
            paths:'/blog',
            name: 'blog',
            component: BlogComponent
        },
        {
            paths:'/chisiamo',
            name: 'chiSiamo',
            component: ChiSiamoComponent
        },
        {
            paths:'/*',
            name: 'notFound',
            component: NotFound
        }
    ]
})

export default router;