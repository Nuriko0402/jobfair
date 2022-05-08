<template>
    <MainContainer>
        <student-information />
        <br /><br />
        <!-- <all-vacancy /> -->
        
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
    }
})
</script>
