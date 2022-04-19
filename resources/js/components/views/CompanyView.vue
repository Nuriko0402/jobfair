<template>
    <MainContainer>
        <company-information />  
        <all-vacancy />
        
        <!-- <vacancy-edit @closeMe="isShowing=false" v-show="isShowing"> -->
    </MainContainer>    
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import CompanyInformation from '../allcomp/CompanyInformation.vue'
import CategoryVacancy from '../allcomp/CategoryVacancy.vue'
import AllVacancy from '../allcomp/AllVacancy.vue'

export default {
    components: {
        CompanyInformation,
        MainContainer,
        CategoryVacancy,
        AllVacancy,
    }
}
</script>