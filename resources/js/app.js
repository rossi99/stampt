require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router";
import Vue from "vue";
import JQuery from 'jquery'

// icon imports
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faBars } from '@fortawesome/free-solid-svg-icons'
import { faXmark } from '@fortawesome/free-solid-svg-icons'

// component imports
import Index from "./index";
import navHeader from "./components/main/header"
import landingInfo from "./components/landing/landing-info"
import builder from "./components/loyaltycard/card-builder"

window.Vue = require('vue').default;
library.add(faBars, faXmark)
window.$ = JQuery;

// global component registration
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.component('nav-header', navHeader)
Vue.component('landing-info', landingInfo)
Vue.component('card-builder', builder)

Vue.use(VueRouter)

const app = new Vue({
    el: '#app', // mounts vue into div with id of 'app'
    router,
    components: {
        "index": Index
    },
});
