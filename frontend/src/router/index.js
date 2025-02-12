import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/HomeView.vue';  // ← ファイル名を修正
import About from '../views/AboutView.vue';  // ← 必要なら追加

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About }  // ← 必要ならルート追加
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
