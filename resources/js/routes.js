import Vue from 'vue';
import VueRouter from 'vue-router';

import Game from '@/js/components/Game';

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'game',
            component: Game
        },        
    ]
});

export default router;