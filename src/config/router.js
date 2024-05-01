import VueRouter from 'vue-router';

const PaginaInicial = () => import('../pages/PaginaInicial.vue');

const routes = [
    { path: '/', component: PaginaInicial }
];

export default new VueRouter({
    mode: 'history',
    routes
});