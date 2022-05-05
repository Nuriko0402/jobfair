<template>
    <MainContainer>
        <vacancy-response-comp :vacancies="vacancies"/>

    </MainContainer>
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import VacancyResponseComp from '../allcomp/VacancyResponseComp.vue'
import axios from 'axios' //axios
export default {
    components: {
        MainContainer,
        VacancyResponseComp
    },
    props: {
        data: {
            type: Array
        }
    },
    data(){
        return {
        vacancies: [],
        students: [],
        isVacanciesLoading: false
        }
    },
    methods: {
        /*async fetchVacancies(){
        try {
            this.isVacanciesLoading = true;
            const response = await axios.get('http://127.0.0.1:8000/api/vacancies');
            this.vacancies = response.data.vacancies;
            this.isVacanciesLoading = false;
        } catch(e){
            alert('Ошибка')
        } finally {}
        }, */

        testFunction() {
            axios.put(
                    '/api/vacancies/1',
                    {
                        "title": "Эксперт по пожарной безопасности 2",
                        "description": "Текст изменен",
                        "company_id": 1
                    },
                    {headers: { "Content-Type": "application/json"}
                })
                .then(response => {
                    console.log(response.data);
                }).catch(error => {
                    console.log(response);
                })
        }
        // async fetchStudents(){
        //   try {
        //     this.isStudentsLoading = true;
        //     const response = await axios.get('http://127.0.0.1:8000/api/vacancies')
        //     this.students = response.data.students;
        //     this.isStudentsLoading = false;
        //   } catch(e){
        //      alert ('Ошибка')
        //   } finally {}
        // }
    },
    mounted() {
        // this.fetchVacancies();
        //this.fetchStudents();
        this.testFunction();
    }
}
</script>
