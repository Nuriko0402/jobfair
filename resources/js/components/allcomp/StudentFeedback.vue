
<template>
    <MainContainer>
        <div>
            <table class="response_list">
                <tr>
                    <th class="oswald">ФИО</th>
                    <th class="oswald">Желаемая зарплата</th>
                    <th class="oswald">Опыт работы</th>
                    <th class="oswald">Образование</th>
                    <th class="oswald">ОП / Специализация:</th>
                    <th class="oswald">Статус</th>
                </tr>
                <tr v-for="student in students" :key="student.id">
                    <td class="monserat"><b class="bold">{{ student.fio }}</b></td>
                    <td class="monserat">{{ student.salary }}</td>
                    <td class="monserat">{{ student.experience }}</td>
                    <td class="monserat">{{ student.education }}</td>
                    <td class="monserat">{{ student.specialization }}</td>
                    <td>
                        <select>
                            <option value="disabled">не выбрано</option>
                            <option value="">Собеседование</option>
                            <option value="">Отказано</option>
                            <option value="">На рассмотрении</option>
                        </select>
                    </td>
                    <td><a class="btn but_or" :href="`tel:${student.contact}`">{{student.contact}}</a></td>
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
        students: {
            type: Array,
            required: true
        }
    },
    data(){
        return {
        students: [],
        isVacanciesLoading: false
        }
    },
    methods: {
        async fetchStudents(){
            try {
                this.isStudentsLoading = true;
                const response = await axios.get('http://127.0.0.1:8000/api/students');
                this.students = response.data.students;
                this.isStudentsLoading = false;
            } catch(e){
                alert('Ошибка')
            } finally {}
        }
    },
    mounted() {
        this.fetchStudents();
    }
}
</script>