import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/News1.vue'

Vue.use(VueRouter)

  const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: () => import('../views/About.vue')
  },
  {
      path: '/films',
      name: 'films',
      component: () => import('../views/Films.vue')
    },
    {
      path: '/GNews',
      name: 'GNews',
      component: () => import('../views/GNews.vue')
    },
    {
      path: '/Economy',
      name: 'Economy',
      component: () => import('../views/Economy.vue')
    },
    {
      path: '/News',
      name: 'News',
      component: () => import('../views/News1.vue')
    },
    {
      path: '/Politics',
      name: 'Politics',
      component: () => import('../views/Politics1.vue')
    },
    {
      path: '/Science',
      name: 'Science',
      component: () => import('../views/Science.vue')
    },
    {
      path: '/World',
      name: 'World',
      component: () => import('../views/World.vue')
    }
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
});

export default router
