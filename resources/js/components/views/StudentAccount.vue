<template>
    <MainContainer>
        <student-information />
        <br /><br />
        <category-vacancy />
        <all-vacancy />
    </MainContainer>    
</template>

<script>

import MainContainer from '../allcomp/MainContainer.vue'
import StudentInformation from '../allcomp/StudentInformation.vue'
import CategoryVacancy from '../allcomp/CategoryVacancy.vue'
import AllVacancy from '../allcomp/AllVacancy.vue'
import StudentInformEdit from '../allcomp/StudentInformEdit.vue'

export default ({
    components: {
        MainContainer, 
        StudentInformation, 
        CategoryVacancy,  
        AllVacancy,  
        StudentInformEdit,  
    }
})
</script>
