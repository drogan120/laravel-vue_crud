require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);


Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "navbar-component",
    require("./components/NavbarComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./components/FooterComponent.vue").default
);

const routes = [
    {
        path: "/",
        component: require("./pages/Home.vue").default
    },
    {
        path: "/about",
        component: require("./pages/About.vue").default

    },
    {
        path:'*',
        component:require("./pages/Notfound.vue").default
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

const app = new Vue({
    el: "#app",
    router
});
