<template>
    <MainContainer>
        <company-information />  
        <button class="but_or btn" @click="isShowing = !isShowing">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        Добавить вакансию</button>
        <vacancy-form @closeMe="isShowing=false" v-show="isShowing"/>
        <vacancy-list :vacancies="vacancies"/>
    </MainContainer>    
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import CompanyInformation from '../allcomp/CompanyInformation.vue'
import VacancyList from '../allcomp/VacancyList.vue'
import VacancyForm from '../allcomp/VacancyForm.vue'

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
            default: () => [],
        }
    },
    data(){
        return {
            isShowing: false,
            search:'',
            vacancies: [
                {
                    id: 1,
                    title: 'Строитель - BI GROUP',
                    description: 'Lorem ipsum dolor sit amet, veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    salary: '250 000 тг',
                    practice: '1 - 3 года',
                    srok: '6 месяцев',
                    tip: 'Практика',
                    
                }
            ],
            title: '',
            description: '',
            salary: '',
            practice: '',
            srok: '',
            tip: ''
        }
    },
        methods: {
        closeModal(){
            this.isShowing = false;
        },
        createPost(){
            const newVacancy = {
                id: Date.now(),
                title:this.title,
                description:this.description,
                salary:this.salary,
                practice:this.practice,
                srok:this.srok,
                tip:this.tip
            }
            this.vacancies.push(newVacancy);
            this.title = '';
            this.description = '';
            this.salary = '';
            this.practice = '';
            this.srok = '';
            this.tip = '';
            this.closeModal();
        }
    }
}
</script>