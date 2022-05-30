import { createRouter, createWebHistory } from "vue-router";
import TodosView from "../views/TodosView.vue";
import CreateTodoView from "../views/CreateTodoView"
import CreateCategoryView from "../views/CreateCategoryView"
import CategoriesView from "../views/CategoriesView"

const routes = [{
        path: "/",
        name: "Todo Liste",
        component: TodosView,
    },
    {
        path: "/new/todo",
        name: "Todo erstellen",
        component: CreateTodoView,
    },
    {
        path: "/new/category",
        name: "Kategorie erstellen",
        component: CreateCategoryView,
    },
    {
        path: "/categories",
        name: "Kategorie Liste",
        component: CategoriesView,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;