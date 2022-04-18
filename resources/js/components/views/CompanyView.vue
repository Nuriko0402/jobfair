<template>
    <MainContainer>
        <company-information />  
        <category-vacancy />
        <button class="but_or btn" @closeMe="isShowing=false" v-show="isShowing">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        Добавить вакансию</button>
        <br /><br />
        <div>
            <all-vacancy />
        </div>
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
    },
    data() {
        return {
            isShowing: false
        }
    }
}
</script>