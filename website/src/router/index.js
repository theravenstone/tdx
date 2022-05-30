import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import CreateTodoView from "../views/CreateTodoView"

const routes = [{
        path: "/",
        name: "Todo Liste",
        component: HomeView,
    },
    {
        path: "/new/todo",
        name: "Todo erstellen",
        component: CreateTodoView,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;