import { createWebHistory, createRouter } from "vue-router";


const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

const NotFound = { template: '<div>NotFound Data</div>' }

const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar },
    { path: '/:pathMatch(.*)*', component: NotFound }
  ];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
