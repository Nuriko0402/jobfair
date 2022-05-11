<template>
    <MainContainer class="monserat">
        <div class="row">
            <!--фильтр по специализации-->
            <div class="col-lg-3 col-md-12">
               <div class="row oswald mob_filter">
                    <div class="col-6">
                        <b class="mob_none">Специализации</b>
                        <p class="mob_none">
                            <ul v-for="spet in spets" :key="spet.id">
                                <li class="monserat">{{spet.name}}</li>
                            </ul>
                            <a href="">Показать еще</a>
                        </p>

                        <span class="desk_none" @click="isShowing = !isShowing"><b>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filter-left none" viewBox="0 0 16 16">
                                <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                            </svg>Специализации</b>
                        </span>  

                        <b class="mob_none">Отрасль</b>   
                        <p>Должно быть раскрывающее меню с библиотеки VUE</p>
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
            <!-- <company-search class="mob_none"/> -->



            <div class="main_filter monserat company_search row mob_none">
                <div class="col-lg-4">
                    <label for="">Тип занятости</label><br />
                    <select class="btn radius" v-model="selectType" @change="typeChange">
                        <option value="0">не имеет значения</option>
                        <option 
                            v-for="employment_type in employment_types" 
                            :key="employment_type.id" 
                            :value="employment_type.id">
                            {{ employment_type.employment_type }}
                        </option>
                </select>
                </div>

                <div class="col-lg-4">
                    <label for="">График работы</label><br />    
                    <select class="btn radius" v-model="selectSchedule" @change="scheduleChange">
                        <option value="0">не имеет значения</option>
                        <option 
                            v-for="schedule in schedules" 
                            :key="schedule.id" 
                            :value="schedule.id">
                            {{ schedule.schedule }}
                        </option>
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="">Опыт работы</label><br />
                    <select class="btn radius" v-model="selectExperience" @change="experienceChange">
                        <option value="0">не имеет значения</option>
                        <option 
                            v-for="experience in experiences" 
                            :key="experience.id"
                            :value="experience.id">
                            {{ experience.experience }}
                        </option>
                    </select>
                </div>
<!--нету API-->
                <div class="col-lg-4">
                    <label for="">Срок работы</label><br />
                    <select class="btn radius" v-model="selectTimework" @change="timeworkChange">
                        <option value="0">не имеет значения</option>
                        <option 
                            v-for="timework in timeworks" 
                            :key="timework.id"
                            :value="timework.id">
                            {{ timework.timework }}
                        </option>
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="">Зарплата</label><br />
                    <select class="btn radius" v-model="selectSalary">
                        <option value="0">не имеет значения</option>
                        <option 
                            v-for="salary in salarys" 
                            :key="salary.id"
                            :value="salary.id">
                            {{ salary.salary }}
                        </option>
                    </select>
                </div>

                <!-- <div class="col-lg-4"><br />
                    <button @click="clear" class="btn but_or">Сбросить фильтры</button>
                </div>      -->
            <!--поиск-->
            <input class="input_icon" type="text" placeholder="Введите должность" v-model.trim="inputSearch" />
                   
            </div>

            <company-search-mob @closeMe="isShowingSearch=false" v-show="isShowingSearch" />  
            <!--конец фильтра, поиска--> 
                <!--список rомпании-->
                <div class="company_list" v-for="vacancy in filteredVacancies" :key="vacancy.id" @click="companyClick(vacancy.id)">
                    <div class="d-flex">
                        <h6 class="oswald"><b>{{vacancy.salary}}</b></h6>
                        <span class="employment_type">{{translateSch(vacancy.schedule)}}<br />{{new Date().getDate()+'.'+ (new Date().getMonth()+1)+'.'+ new Date().getFullYear()}}</span>
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
                                </svg><b>{{translateEt(vacancy.employment_type)}}</b>
                                
                                    
                            </div>
                            <div class="col-lg-3 col-md-4 paragraph">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg><b>{{translateEx(vacancy.experience)}}</b>
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
    data() {
        return {
            vacancies: [],
            employment_types: [
                { id: 'full', employment_type: 'полная занятость' },
                { id: 'part', employment_type: 'частичная занятость' },
                { id: 'probation', employment_type: 'стажировка'},
                { id: 'project', employment_type: 'проектная работа'},
                { id: 'volunteer', employment_type: 'волонтерство'},
        
            ],
            schedules: [
                { id: 'fullDay', schedule: 'полный день' },
                { id: 'shift', schedule: 'сменный график' },
                { id: 'flyInFlyOut', schedule: 'вахтовый метод' },
                { id: 'remote', schedule: 'удаленная работа' },
                { id: 'flexible', schedule: 'гибкий график' }
            ],
            experiences: [
                { id: 'between1And3', experience: 'от 1 года до 3 лет' },
                { id: 'noExperience', experience: 'нет опыта' },
                { id: 'between3And6', experience: 'от 3 до 6 лет' },
                { id: 'moreThan6', experience: 'более 6 лет}' }
            ],
            timeworks: [
                { id: 'between6', timework: 'до 6 месяцев' },
                { id: 'between6And1', timework: 'от 6 месяцев до 1 года' },
                { id: 'between1', timework: 'от 1 года и более' }
            ],
            salarys: [
                { id: 'notSpecified', salary: 'не указана' },
                { id: 'from50To150', salary: 'от 50 000 до 150 000' },
                { id: 'from150AndMore', salary: 'от 150 000 и более' }
            ],
            inputSearch: '',
            selectType: 0,
            selectSchedule: 0,
            selectExperience: 0,
            selectTimework: 0,
            selectSalary: 0,
            isShowing: false,
            isShowingSearch: false,
            spets: [
                {id: 1, name: 'Дизайн'},
                {id: 1, name: 'Строительство'},
                {id: 1, name: 'Архитектура'},
                {id: 1, name: 'Менеджмент'},
                {id: 1, name: 'Бизнес'},
                {id: 1, name: 'Учет и Аудит'},
                {id: 1, name: 'Маркетинг'},
                {id: 1, name: 'Гостиничный бизнес'}
            ]
        }
    },
    methods: {
        async fetchVacancies(){
            try {
                this.isVacanciesLoading = true;
                const response = await axios.get('http://127.0.0.1:8000/api/vacancies/');
                this.vacancies = response.data.vacancies;
                this.isVacanciesLoading = false;
            } catch(e){
                alert('Ошибка')
                } finally {}
        },
        companyClick: function(ID){
            console.log(ID);
            window.location.href="/company-vacancy?id="+ID;
            // this.$router.push({name: 'CompanyVacancy', params: {id: ID}})
        },
        typeChange() {
            axios
                //фильтр по типу занятости
                .get('http://127.0.0.1:8000/api/vacancies?type=' + this.selectType)
                .then(response => {
                    return this.vacancies = response.data.vacancies || this.selectType == 0;
                });
        },    
        scheduleChange() {
            axios
                //фильтр по графику работы
                .get('http://127.0.0.1:8000/api/vacancies?schedule=' + this.selectSchedule)
                .then(response => {
                    return this.vacancies = response.data.vacancies;
                });
        },
        experienceChange() {
            axios
                //фильтр по опыту работы
                .get('http://127.0.0.1:8000/api/vacancies?experience=' + this.selectExperience)
                .then(response => {
                    return this.vacancies = response.data.vacancies;
                });
        },
        timeworkChange() {
            axios
                //фильтр по опыту работы
                .get('http://127.0.0.1:8000/api/vacancies?timework=' + this.selectTimework)
                .then(response => {
                    return this.vacancies = response.data.vacancies;
                });
        },

        translateEt(text) {
            switch(text) {
                case "full": return 'полная занятость';
                case "part": return 'частичная занятость';
                case "probation": return 'стажировка';
                case "project": return 'проектная работа';
                case "volunteer": return 'волонтерство';
                case "between3And6": return 'волонтерство';
            }
        },
        translateSch(text) {
            switch(text) {
                case "fullDay": return 'полный день';
                case "shift": return 'сменный график';
                case "flyInFlyOut": return 'вахтовый метод';
                case "remote": return 'удаленная работа';
                case "flexible": return 'гибкий график';
            }
        },   
        translateEx(text) {
            switch(text) {
                case "between1And3": return 'от 1 года до 3 лет';
                case "noExperience": return 'нет опыта';
                case "between3And6": return 'от 3 до 6 лет';
                case "moreThan6": return 'более 6 лет';
            }
        },
        clear: function() {
            this.inputSearch = '';
            this.selectType = 0;
            this.selectSchedule = 0; 
            this.selectExperience = 0;
            this.selectTimework = 0;
            this.selectSalary = 0;   
        },
    },
    computed: {
        filteredVacancies: function() {
            return this.vacancies
                // Фильтруем по полю поиска
                .filter(vacancy => {
                    return this.inputSearch == '' || vacancy.title.toLowerCase().indexOf(this.inputSearch.toLowerCase()) !== -1;
                })
        } 
    },
    mounted: function() {
        this.fetchVacancies();
    },
    
}
</script>
<style scoped>
    .d-flex {
        justify-content: space-between;
    }
    .bold {
        font-weight: 900;
    }
    label {
        font-size: .8rem;
    }
    .btn {
        width: 90%;
    }
    .input_icon {
        margin-top: 2%;
    }
    ul {
        margin-top: 15px;
    }
    ul li {
        list-style: none;
    }
</style>