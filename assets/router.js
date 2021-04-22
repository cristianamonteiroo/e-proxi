import Router from 'vue-router';
import Vue from 'vue';
import FirstPage from './js/components/FirstPage.vue';
import SecondPage from './js/components/SecondPage.vue';

Vue.use(Router);

const router = new Router({
    routes: [
        {
            path: '/first',
            name: 'first',
            component: FirstPage,
        },
        {
            path: '/second',
            name: 'second',
            component: SecondPage,
        },
    ],
    mode: 'history',
});

export default router;