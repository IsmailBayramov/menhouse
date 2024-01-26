import { createRouter, createWebHashHistory } from 'vue-router'
import { createApp } from 'vue'
import App from './App.vue'
import HomeView from './components/views/HomeView.vue'
import VacanciesView from './components/views/VacanciesView.vue'
import ProgrammsView from './components/views/ProgrammsView.vue'
import ModelsView from './components/views/ModelsView.vue'
import CertificatesView from './components/views/CertificatesView.vue'
import QuestionsView from './components/views/QuestionsView.vue'

const router = createRouter({
    history: createWebHashHistory(),
    routes: [{
        name: 'Home',
        path: '/',
        component: HomeView
    }, {
        name: 'Vacancies',
        path: '/vacancies',
        component: VacanciesView
    }, {
        name: 'Programms',
        path: '/programms',
        component: ProgrammsView
    }, {
        name: 'Models',
        path: '/models',
        component: ModelsView
    }, {
        name: 'Certificates',
        path: '/certificates',
        component: CertificatesView 
    }, {
        name: 'Questions',
        path: '/questions',
        component: QuestionsView 
    }]
})

const app = createApp(App).use(router).mount('#app')
