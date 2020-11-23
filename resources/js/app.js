require("./bootstrap");

import Vue from 'vue';
import router from './routers';

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

const app = new Vue({
    el: "#app",
    router
});
