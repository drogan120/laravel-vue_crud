import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        component: require("../pages/Home.vue").default
    },
    {
        path: "/about",
        component: require("../pages/About.vue").default
    },
    {
        path: "/users",
        component: require("../pages/users/Users.vue").default
    },
    {
        path: "/new/users",
        component: require("../pages/users/newUsers.vue").default
    },
    {
        path: "/users/:id",
        props: true,
        component: require("../pages/users/Profile.vue").default
    },
    {
        path: "*",
        component: require("../pages/Notfound.vue").default
    }
];

const router = new VueRouter({
    linkExactActiveClass: "active",
    mode: "history",
    routes
});

export default router;
