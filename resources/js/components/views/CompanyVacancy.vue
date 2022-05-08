<template>
    <MainContainer>
        
        <vacancy-view :vacancies="vacancies"/>
        <hr />
        <!-- <category-vacancy /> -->
        <all-vacancy />
        
    </MainContainer>        
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import VacancyView from '../allcomp/VacancyView.vue'
import CategoryVacancy from '../allcomp/CategoryVacancy.vue'
import AllVacancy from '../allcomp/AllVacancy.vue'
import axios from 'axios'
export default {
    setup() {
        
    },
    components: {
        MainContainer,
        VacancyView,
        CategoryVacancy,
        AllVacancy
    },
data(){
    return {
      vacancies: [],
    }
  },
  methods: {
    async fetchVacancies() {
            try {
                this.isVacanciesLoading = true;
                    const response = await axios.get('http://127.0.0.1:8000/api/vacancies?_id');
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
