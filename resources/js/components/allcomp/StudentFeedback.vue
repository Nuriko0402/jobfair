
<template>
    <MainContainer>
        <div>
            <table class="response_list">
                <tr>
                    <th class="oswald">Вакансия</th>
                    <th class="oswald">Предлагаемая зарплата</th>
                    <th class="oswald">Опыт работы</th>
                    <th class="oswald">График работы</th>
                    <th class="oswald">Тип занятости</th>
                    <th class="oswald">Заявки</th>
                </tr>
                <tr v-for="vacancy in vacancies" :key="vacancy.id">
                    <td class="monserat"><b class="bold">{{ vacancy.title }}</b></td>
                    <td class="monserat">{{ vacancy.salary }}</td>
                    <td class="monserat">{{ vacancy.experience }}</td>
                    <td class="monserat">{{ vacancy.schedule }}</td>
                    <td class="monserat">{{ vacancy.employment_type }}</td>
                    <td>48 <span class="or">(3 новых)</span></td>
                    <td><a class="btn but_or" :href="`tel:${vacancy.id}`">Посмотреть заявки</a></td>
                </tr> 
            </table>
    </div>
    </MainContainer>    
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import axios from 'axios' //axios
export default {
    components: {
        MainContainer
    },
    props: {
        vacancies: {
            type: Array,
            required: true
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
        async fetchVacancies(){
        try {
            this.isVacanciesLoading = true;
            const response = await axios.get('http://127.0.0.1:8000/api/vacancies');
            this.vacancies = response.data.vacancies;
            this.isVacanciesLoading = false;
        } catch(e){
            alert('Ошибка')
        } finally {}
        },
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
        this.fetchVacancies();
        //this.fetchStudents();
    }
}
</script>