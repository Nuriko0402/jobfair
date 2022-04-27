<template>
    <MainContainer class="monserat">
        <div class="row">
            <!--фильтр по специализации-->
            <div class="col-lg-3 col-md-12">
               <div class="row oswald mob_filter">
                    <div class="col-6">
                        <b class="mob_none">Специализации</b>
                        <span class="desk_none" @click="isShowing = !isShowing"><b>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filter-left none" viewBox="0 0 16 16">
                                <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                            </svg>Специализации</b>
                        </span>     
                    </div>
                    <div class="col-6">
                        <span class="showing_search desk_none" @click="isShowingSearch = !isShowingSearch"><b>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                            </svg>Фильтр</b>
                        </span>
                    </div>
               </div>
                <company-filter class="mob_none" />
               <company-filter-mob @closeMe="isShowing=false" v-show="isShowing"/>
            </div>
            <div class="col-lg-9 col-md-12 border-left">
            <!--конец фильтра по специализации--> 
            <!--фильтр, поиск-->
            <company-search class="mob_none"/>
            <company-search-mob @closeMe="isShowingSearch=false" v-show="isShowingSearch" />  
            <!--конец фильтра, поиска--> 

                <!--список rомпании-->
                <br/><br/>
                <div class="company_list" v-for="vacancy in vacancies" :key="vacancy.id" @click="companyClick(vacancy.id)">
                    <div class="d-flex">
                        <h6 class="oswald"><b>{{vacancy.salary}}</b></h6>
                        <span class="employment_type">{{vacancy.employment_type}}<br />{{new Date().getDate()+'.'+ (new Date().getMonth()+1)+'.'+ new Date().getFullYear()}}</span>
                    </div>
                    <span><b class="bold">{{ vacancy.title }}</b></span>
                    <p class="monserat">{{vacancy.description}}</p>
                        <div class="row pr">
                            <div class="col-lg-6 col-md-4 paragraph">
                                <img :src="vacancy.logo" class="logo_company_in_list" :alt="vacancy.title">
                                
                            </div>
                            <div class="col-lg-3 col-md-4 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg><b>{{ vacancy.employment_type }}</b>
                            </div>
                            <div class="col-lg-3 col-md-4 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg><b>{{ vacancy.experience }}</b>
                            </div>
                            <div class="col-lg-3 col-md-4 paragraph">
                                <b v-for="(item) in vacancy.category" :key="item.name">{{ item.name }}</b>
                            </div>
                        </div>
                </div>
                <!--pagination-->
                <div class="pagin mob_none">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </li>
                        <li class="active">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </MainContainer>
</template>

<script>
import MainContainer from './MainContainer.vue'
import CompanyFilter from './CompanyFilter.vue'
import CompanyFilterMob from './CompanyFilterMob.vue'
import CompanySearch from './CompanySearch.vue'
import CompanySearchMob from './CompanySearchMob.vue'

export default {
  components: { 
      MainContainer,
      CompanyFilter,
      CompanyFilterMob,
      CompanySearch,
      CompanySearchMob,

    },
    props: {
        vacancies: {
            type: '',
            required: true
        }
    },
    data() {
        return {
            isShowing: false,
            isShowingSearch: false,
            search:'',
        }
    },
    methods: {
        companyClick: function(ID){
            console.log(ID);
            window.location.href="/company-vacancy?id="+ID;
            // this.$router.push({name: 'CompanyVacancy', params: {id: ID}})
        }
    }

}
</script>
<style scoped>
    .d-flex {
        justify-content: space-between;
    }
    .bold {
        font-weight: 900;
    }
</style>