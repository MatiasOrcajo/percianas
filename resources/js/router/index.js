import { createRouter, createWebHistory, routerKey } from "vue-router";

import Home from "../components/home/index.vue";

const router = createRouter({
    history: createWebHistory(''),
    routes: [
      {
        path: "/",
        name: "home",
        component: Home,
      },
    ],
  });
  

export default router;