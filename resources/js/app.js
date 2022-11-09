import "./bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.js";

import { createApp } from "vue";

import router from "./router/router";
import Base from "./layouts/base.vue";

createApp(Base).use(router).mount("#app");
