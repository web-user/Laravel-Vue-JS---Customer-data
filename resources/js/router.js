import { createWebHistory, createRouter } from "vue-router";
import CustomerList from "./components/CustomerList.vue"

import SingleCustomer from "./components/SingleCustomer.vue"

const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

const NotFound = { template: '<div>NotFound Data</div>' }

const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar },
    { path: '/customers', component: CustomerList },
    { path: '/:pathMatch(.*)*', component: NotFound },
    { path: '/customer/:id', component: SingleCustomer }
  ];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
