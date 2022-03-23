import { createWebHistory, createRouter} from "vue-router";
import personas from "./components/Personas";
import mapa from "./components/Mapa";
import {Router} from "../../../../../../cms/wp-includes/js/backbone";
//import App from "./App";

export default new Router({
    routes: [
        {
            path: "/",
            name: "personas",
            component: personas
        },
        {
            path: '/mapa/:id',
            name: "mapa",
            component: mapa
        }
    ]
})

/*const routes = [
    {
        path: "/",
        name: "personas",
        component: personas
    },
    {
        path: '/mapa/:id',
        name: "mapa",
        component: mapa
    }
];

const router = createRouter({
    history: createWebHistory(),
});

export default router;*/