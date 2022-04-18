<template>
    <MainContainer>
        <vacancy-response-comp :data="students"/>
    </MainContainer>    
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
import VacancyResponseComp from '../allcomp/VacancyResponseComp.vue'
export default {
    components: {
        MainContainer,
        VacancyResponseComp
    },
    data() {
        return {
            students: students
        }
    }
}
</script>