<template>
    <MainContainer>
        <student-information />
        <br /><br />
        <all-vacancy />
        
    </MainContainer>    
</template>

<script>

import MainContainer from '../allcomp/MainContainer.vue'
import StudentInformation from '../allcomp/StudentInformation.vue'
import AllVacancy from '../allcomp/AllVacancy.vue'
import StudentInformEdit from '../allcomp/StudentInformEdit.vue'
import axios from 'axios'

export default ({
    components: {
        MainContainer, 
        StudentInformation, 
        AllVacancy,  
        StudentInformEdit,  
    },
    props: {
        data: {
            type: Array
        }
    },
    data(){
        return {
        students: [],
        isStudentsLoading: false
        }
    },
    methods: {
        async fetchStudents(){
          try {
            this.isStudentsLoading = true;
            const response = await axios.get('http://127.0.0.1:8000/api/vacancies')
            this.students = response.data.students;
            this.isStudentsLoading = false;
          } catch(e){
             alert ('Ошибка')
          } finally {}   
        }
    },
    mounted() {
        this.fetchStudents();
    }
})
</script>
