<template>
    <MainContainer>
        
        <vacancy-view />
        <hr />
        <category-vacancy />
        <all-vacancy />
    </MainContainer>        
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import VacancyView from '../allcomp/VacancyView.vue'
import CategoryVacancy from '../allcomp/CategoryVacancy.vue'
import AllVacancy from '../allcomp/AllVacancy.vue'
export default ({
    setup() {
        
    },
    components: {
        MainContainer,
        VacancyView,
        CategoryVacancy,
        AllVacancy
    },
    props: {
        data: {
            type: Array,
            default: () => [],
        }
    },
    data(){
        return {
            listData: listData,
            categoryData: categoryData,
            search:''
        }
    },

})
</script>
