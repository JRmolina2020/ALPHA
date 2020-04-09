/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
Vue.component("home-panel", require("./components/HomePanel.vue").default);
Vue.component("role-users", require("./components/roles/Role.vue").default);

const app = new Vue({
    el: "#app"
});
