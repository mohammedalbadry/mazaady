import { createRouter, createWebHistory } from "vue-router";
import FilterView from "../views/filter.vue";

const routes = [
    {
        path: "/:pathMatch(.*)*",
        name: "filter",
        component: FilterView,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
