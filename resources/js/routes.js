import VueRouter from "vue-router";

// components for routes
import landing from "./components/landing/landing"
import builder from "./components/loyaltycard/card-builder"

const routes = [
    {
        path: "/",
        component: landing,
        name: "home",
    },
    {
        path: "/loyalty-card/builder",
        component: builder,
        name: "card-builder",
    },
];

const router = new VueRouter({
    routes, // short hand for routes:routes
    mode: "history", // removes # that vue adds to URL
});

// makes router available to app.js
export default router;
