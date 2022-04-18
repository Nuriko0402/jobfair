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
                <div class="company_list" v-for="student in students" :key="student.id" @click="studentClick(student.id)">
                    <div class="d-flex">
                        <h6 class="oswald"><b>{{student.sallary}}</b></h6>
                        <span class="tip">{{student.tip}}<br />{{new Date().getDate()+'.'+ (new Date().getMonth()+1)+'.'+ new Date().getFullYear()}}</span>
                    </div>
                    <span><b>{{ student.schedule }}</b></span>
                    <p class="monserat">{{student.about}}</p>
                        <div class="row pr">
                            <div class="col-md-6 paragraph">
                                <img :src="student.photo" class="photo_student_in_list" :alt="student.fio">
                                {{ student.fio }}
                            </div>
                            <div class="col-md-3 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                {{ student.experience }}
                            </div>
                            <div class="col-md-3 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                                </svg>
                                {{ student.education }}
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
    data(){
        return {
            isShowing: false,
            isShowingSearch: false,
            search:'',
            students: [ 
                {
                    id: 1,
                    photo: '/images/photo.jpg',
                    fio: 'Отыншиева Айнур Мусаевна',
                    sallary: '550 000',
                    experience: '1 - 3 года',
                    education: 'Высшее',
                    about: 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Labore delectus repellat ad voluptatibus officia deserunt omnis voluptates, tenetur saepe culpa enim velit. Rem accusamus rerum dolorum minima natus laboriosam exercitationem.em',
                    vuz: 'МОК',
                    lang: 'русский, казахский, корейский',
                    schedule: 'частичная занятость',
                    contact: '+7 707 221 59 91'
                },
                {
                    id: 2,
                    photo: '/images/photo.jpg',
                    fio: 'Максат Жанат',
                    sallary: '150 000',
                    experience: '1 - 3 года',
                    education: 'Высшее',
                    about: 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Labore delectus repellat ad voluptatibus officia deserunt omnis voluptates, tenetur saepe culpa enim velit. Rem accusamus rerum dolorum minima natus laboriosam exercitationem.em',
                    vuz: 'МОК',
                    lang: 'русский, казахский, корейский',
                    schedule: 'частичная занятость',
                    contact: '+7 701 021 59 91'
                }
            ]
        }
    },
    methods: {
        studentClick: function(ID){
            console.log(ID);
            window.location.href='/student-account?id='+ID;
        }
    }
}
    // computed:{
    //     filteredCompnylist: function() {
    //         return this.data.filter((item) => {
    //             return item.title.match(this.search);
    //         })
    //     }
    // }
</script>
<style>
    .logo_company_in_list {
        width: 120px;
    }
    .photo_student_in_list {
        width: 10%;
        border-radius: 50%;
    }
</style>