require('./bootstrap');

import Multiselect from 'vue-multiselect'

window.Vue = require('vue').default;

Vue.component('multiselect', Multiselect)

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('main-component', require('./components/MainComponent.vue').default);
Vue.component('student-list', require('./components/allcomp/StudentList.vue').default);
Vue.component('company-list', require('./components/allcomp/CompanyList.vue').default);
Vue.component('vacancy-form', require('./components/allcomp/VacancyForm.vue').default);
Vue.component('vacancy-list', require('./components/allcomp/VacancyList.vue').default);
Vue.component('category-vacancy', require('./components/allcomp/CategoryVacancy.vue').default);
Vue.component('company-filter', require('./components/allcomp/CompanyFilter.vue').default);
Vue.component('company-filter-mob', require('./components/allcomp/CompanyFilterMob.vue').default);  
Vue.component('company-search-mob', require('./components/allcomp/CompanySearchMob.vue').default);
Vue.component('for-stud-select', require('./components/allcomp/ForStudSelect.vue').default);
Vue.component('main-container', require('./components/allcomp/MainContainer.vue').default);
Vue.component('student-information', require('./components/allcomp/StudentInformation.vue').default);
Vue.component('student-inform-edit', require('./components/allcomp/StudentInformEdit.vue').default);
Vue.component('vacancy-edit', require('./components/allcomp/VacancyEdit.vue').default);
Vue.component('vacancy-response-comp', require('./components/allcomp/VacancyResponseComp.vue').default);
Vue.component('vacancy-view', require('./components/allcomp/VacancyView.vue').default);
Vue.component('company-information', require('./components/allcomp/CompanyInformation.vue').default);


Vue.component('company-vacancy', require('./components/views/CompanyVacancy.vue').default);
Vue.component('company-view', require('./components/views/CompanyView.vue').default);
Vue.component('enter-view', require('./components/views/EnterView.vue').default);
Vue.component('list-companies', require('./components/views/ListCompanies.vue').default);
Vue.component('main-view', require('./components/views/MainView.vue').default);
Vue.component('main-page', require('./components/views/MainPage.vue').default);
Vue.component('student-account', require('./components/views/StudentAccount.vue').default);
Vue.component('top-companies', require('./components/views/TopCompanies.vue').default);
Vue.component('vacancy-response', require('./components/views/VacancyResponse.vue').default);
Vue.component('vacancy-view', require('./components/views/VacancyView.vue').default);


Vue.component('the-header', require('./components/layouts/TheHeader.vue').default);

const app = new Vue({
    el: '#app',
});