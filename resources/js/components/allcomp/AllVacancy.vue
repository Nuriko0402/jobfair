<template>
    <div class="row">
        <button class="but_or btn" @click="isShowing = !isShowing">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        Добавить вакансию</button>

        <div class="monserat vacancyedit" v-show="isShowing">
            <h5 class="oswald">Создать вакансию
                <span @click="closeModal" class="close_btn">x</span>
            </h5>
            <input v-bind:value="title" type="text" placeholder="Наименование вакансии" class="w-100" required><br />
            
            <select v-bind:value="srok" name="" id="" class="w-100" required>
                <option value="">Срок</option>
            </select><br />

            <select v-bind:value="practice" name="" id="" class="w-100" required>
                <option value="">Занятость</option>
            </select><br />

            <input v-bind:value="salary" type="text" placeholder="Зарплата" class="w-100" required><br />

            <select v-bind:value="tip" name="" id="" class="w-100" required>
                <option value="">Выберите тип</option>    
            </select><br />

            <textarea v-bind:value="description" name="" id="" class="w-100" placeholder="Описание вакансии" required></textarea><br />

            <button class="btn but_or w-100" @click="createPost">Создать</button> 
        </div>   



        <h4 class="oswald">Вакансии</h4>
            <div class="company_list col-md-3 comp_list_box radius" v-for="company in companies" :key="company.id">
                <h6 class="oswald"><b>{{ company.title }}</b></h6>
                <p>{{ company.text }}</p>
                    <div class="paragraph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                        </svg><b>{{ company.salary }}</b>
                    </div>
                    <div class="paragraph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                        </svg><b>{{ company.tip }}</b>
                    </div>
                    <div class="paragraph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg><b>{{ company.srok }}</b>
                    </div><br/>
                    <button class="but_or btn" @click="modalShow = !modalShow">Редактировать</button>
            </div>
    </div> 
</template>

<script>
export default {
    props: {
        data: {
            type: Array,
            default: () => [],
        }
    },
    data(){
        return {
            isShowing: false,
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
                    logo: '../assets/images/bi.png'
                    
                },
            ]
        }
    },
    methods: {
        closeModal(){
            this.$emit('closeMe')
    }
    // computed:{
    //     filteredCompnylist: function() {
    //         return this.data.filter((company) => {
    //             return company.title.match(this.search);
    //         })
    //     }
    // }
}
</script>
<style scoped>
    .vacancyedit {
        margin: 5% 0;
    }
</style>