import { createRouter, createWebHistory } from 'vue-router'
import { createApp } from 'vue'
import App from './App.vue'
import HomeView from './components/views/HomeView.vue'
import VacanciesView from './components/views/VacanciesView.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [{
        name: 'Home',
        path: '/menhouse-app/',
        component: HomeView
    }, {
        name: 'Vacancies',
        path: '/menhouse-app/vacancies',
        component: VacanciesView
    }]
})

const app = createApp(App).use(router).mount('#app')
