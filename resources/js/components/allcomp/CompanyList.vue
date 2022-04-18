<template>
    <MainContainer class="monserat">
        <div class="row">
            <!--фильтр по специализации-->
            <div class="col-lg-3 col-md-12">
               <div class="row oswald mob_filter">
                    <div class="col-6" @click="isShowing = !isShowing">
                        <b class="mob_none">Специализации</b>
                        <span class="desk_none"><b>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filter-left none" viewBox="0 0 16 16">
                                <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                            </svg>Специализации</b>
                        </span>     
                    </div>
                    <div class="col-6" @click="isShowingSearch = !isShowingSearch">
                        <span class="showing_search desk_none"><b>
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
            <company-search class="mob_none" />
            <company-search-mob @closeMe="isShowingSearch=false" v-show="isShowingSearch" />  
            <!--конец фильтра, поиска--> 

                <!--список rомпании-->
                <br/><br/>
                <div class="company_list" v-for="item in companies" :key="item.id" @click="companyClick(item.id)">
                    <div class="d-flex">
                        <h6 class="oswald"><b>{{item.salary}}</b></h6>
                        <span class="tip">{{item.tip}}<br />{{new Date().getDate()+'.'+ (new Date().getMonth()+1)+'.'+ new Date().getFullYear()}}</span>
                    </div>
                    <span><b>{{ item.vacancyName }}</b></span>
                    <p class="monserat">{{item.text}}</p>
                        <div class="row pr">
                            <div class="col-lg-6 col-md-4 paragraph">
                                <img :src="item.logo" class="logo_company_in_list" :alt="item.title">
                                {{ item.title }}
                            </div>
                            <div class="col-lg-3 col-md-4 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                {{ item.practice }}
                            </div>
                            <div class="col-lg-3 col-md-4 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                {{ item.srok }}
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
        data: {
            type: Array,
            default: () => [],
        }
    },
    data() {
        return {
            isShowing: false,
            isShowingSearch: false,
            search:'',
            companies: [ 
                {
                    id: 1,
                    title: 'Строитель - BI GROUP',
                    text: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    requirement: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    salary: '250 000 тг',
                    practice: '1 - 3 года',
                    srok: '6 месяцев',
                    vacancyName: 'Строитель',
                    tip: 'Практика',
                    logo: '/images/bi.png'
                },
                {
                    id: 2,
                    title: 'Дизайнер - BI GROUP',
                    text: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    requirement: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    salary: '550 000 тг',
                    practice: '10 лет',
                    srok: '17 месяцев',
                    vacancyName: 'Дизайнер',
                    tip: 'Практика',
                    logo: '/images/bi.png'
                },
            ]
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