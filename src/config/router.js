import VueRouter from 'vue-router';

const HomePage = () => import('../pages/HomePage.vue');

const routes = [
    { path: '/', component: HomePage }
];

export default new VueRouter({
    mode: 'history',
    routes
});