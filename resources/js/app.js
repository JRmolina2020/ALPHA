require("./bootstrap");

window.Vue = require("vue");
Vue.component("home-panel", require("./components/HomePanel.vue").default);
Vue.component("role-users", require("./components/roles/Role.vue").default);
Vue.component(
    "permissions",
    require("./components/permissions/Permission.vue").default
);
Vue.component("users", require("./components/users/User.vue").default);

const app = new Vue({
    el: "#app"
});
