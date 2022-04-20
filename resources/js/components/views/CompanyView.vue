<template>
    <MainContainer>
        <company-information />  
        <button class="but_or btn" @click="isShowing = !isShowing">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        Добавить вакансию</button>
        <vacancy-form @closeMe="isShowing=false" v-show="isShowing" @create="createVacancy"/><br /><br />
        <vacancy-list :vacancies="vacancies" @remove="removeVacancy" v-if="!isVacanciesLoading"/>
        <div v-else>идет загрузка...</div>
    </MainContainer>    
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import CompanyInformation from '../allcomp/CompanyInformation.vue'
import VacancyList from '../allcomp/VacancyList.vue'
import VacancyForm from '../allcomp/VacancyForm.vue'
import axios from 'axios'
export default {
    components: {
        CompanyInformation,
        MainContainer,
        VacancyList,
        VacancyForm
    },
    props: {
        data: {
            type: Array,
            required: true
        }
    },
    data(){
        return {
            isShowing: false,
            search:'',
            vacancies: [],
            isVacanciesLoading: false
            
        }
    },
        methods: {
        closeModal(){
            this.isShowing = false;
        },
        createVacancy(vacancy){
            this.vacancies.push(vacancy);
            this.title = '';
            this.description = '';
            this.salary = '';
            this.schedule = '';
            this.experience = '';
            this.tip = '';
            this.closeModal();
        },
        removeVacancy(vacancy) {
            this.vacancies = this.vacancies.filter(p => p.id !== vacancy.id)
        },
        async fetchVacancies() {
            try {
                this.isVacanciesLoading = true;
                    const response = await axios.get('https://jsonplaceholder.typicode.com/posts?_limit=5');
                    this.vacancies = response.data;
                    this.isVacanciesLoading = false;
            } catch(e){
                alert('Ошибка')
            } finally {}
        }
    },
    mounted() {
        this.fetchVacancies();
    }
}
</script>