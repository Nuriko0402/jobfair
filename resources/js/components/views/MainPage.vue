<template>
  <div class="MainPage">
    <MainContainer>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="btn tab-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ищу сотрудника</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="btn tab-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ищу работу</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><student-list/></div>
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><company-list :vacancies="vacancies"/></div>
      </div>
    </MainContainer>
  </div>
</template>


<script>
import MainContainer from '../allcomp//MainContainer.vue' //отступы для страницы
import CompanyList from '../allcomp/CompanyList.vue' //список компании
import StudentList from '../allcomp/StudentList.vue' //список студентов
import axios from 'axios' //axios

export default {
  name: 'HomeView',
  components: {
    MainContainer,
    CompanyList,
    StudentList
  },
  data(){
    return {
      vacancies: [],
      isVacanciesLoading: false
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
