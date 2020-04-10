require("./bootstrap");

window.Vue = require("vue");
window.Axios = require("axios");
//import
import store from "./store";
import SmartTable from "vuejs-smart-table";
import swal from "sweetalert";
//start validate
import { ValidationProvider, ValidationObserver } from "vee-validate";
import { extend } from "vee-validate";
import * as rules from "vee-validate/dist/rules";
import { messages } from "vee-validate/dist/locale/es.json";
Object.keys(rules).forEach(rule => {
    extend(rule, {
        ...rules[rule],
        message: messages[rule]
    });
});
Vue.component("ValidationProvider", ValidationProvider);
Vue.component("ValidationObserver", ValidationObserver);
//end validate
//end import
//vue use
Vue.use(SmartTable);

//end vue use
//componentes
Vue.component("home-panel", require("./components/HomePanel.vue").default);
Vue.component("role-users", require("./components/roles/Role.vue").default);
Vue.component(
    "permissions",
    require("./components/permissions/Permission.vue").default
);
Vue.component("users", require("./components/users/User.vue").default);
Vue.component(
    "categories",
    require("./components/categories/index.vue").default
);

//endcomponentes

const app = new Vue({
    el: "#app",
    store
});
