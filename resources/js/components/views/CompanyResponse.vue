<template>
    <MainContainer>
        <company-response-vac :vacancies="vacancies"/>

    </MainContainer>
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import CompanyResponseVac from '../allcomp/CompanyResponseVac.vue'
import axios from 'axios' //axios
export default {
    components: {
        MainContainer,
        CompanyResponseVac
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
    }
}
</script>
