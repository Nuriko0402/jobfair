
<template>
    <MainContainer>
        <div>
            <table class="response_list">
                <tr>
                    <th class="oswald">Компания</th>
                    <th class="oswald">Вакансия</th>
                    <th class="oswald">Предлагаемая зарплата</th>
                    <th class="oswald">Опыт работы</th>
                    <th class="oswald">Тип занятости</th>
                    <th class="oswald">Статус</th>
                </tr>
                <tr v-for="vacancy in vacancies" :key="vacancy.id">
                    <td class="monserat"><b class="bold">{{ vacancy.companyName }}</b></td>
                    <td class="monserat">{{ vacancy.title }}</td>
                    <td class="monserat">{{ vacancy.salary }}</td>
                    <td class="monserat">{{ vacancy.experience }}</td>
                    <td class="monserat">{{ vacancy.employment_type }}</td>
                    <td>
                        <select class="monserat pd-2">
                            <option value="disabled">не выбрано</option>
                            <option value="">Собеседование</option>
                            <option value="">Отказано</option>
                            <option value="">На рассмотрении</option>
                        </select>
                    </td>
                    <td><a class="btn but_or" :href="`tel:${vacancy.contact}`">{{vacancy.contact}}</a></td>
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
        isVacanciesLoading: false
        }
    },
    methods: {
        async fetchVacancies(){
            try {
                this.isVacanciesLoading = true;
                const response = await axios.get('http://127.0.0.1:8000/api/vacancies?schedule=');
                this.vacancies = response.data.vacancies;
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
<style scoped>
    .pd-2 {
        padding: 2%;
        border: 1px solid #fff;
        background: #fff;
    }
    select:focus-visible {
        border: 1px solid #fff;
        background: #fff;
    }
    .but_or {
        min-width: 100%;
    }
</style>