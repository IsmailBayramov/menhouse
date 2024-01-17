import { createRouter, createWebHistory } from 'vue-router'
import { createApp } from 'vue'
import App from './App.vue'
import HomeView from './components/views/HomeView.vue'
import VacanciesView from './components/views/VacanciesView.vue'
import ProgrammsView from './components/views/ProgrammsView.vue'
import ModelsView from './components/views/ModelsView.vue'
import CertificatesView from './components/views/CertificatesView.vue'
import QuestionsView from './components/views/QuestionsView.vue'

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
    }, {
        name: 'Programms',
        path: '/menhouse-app/programms',
        component: ProgrammsView
    }, {
        name: 'Models',
        path: '/menhouse-app/models',
        component: ModelsView
    }, {
        name: 'Certificates',
        path: '/menhouse-app/certificates',
        component: CertificatesView 
    }, {
        name: 'Questions',
        path: '/menhouse-app/questions',
        component: QuestionsView 
    }]
})

const app = createApp(App).use(router).mount('#app')
