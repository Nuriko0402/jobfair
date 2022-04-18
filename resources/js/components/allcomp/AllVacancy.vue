<template>
    <div class="row">
        <h4 class="oswald">Другие вакансии компании</h4>
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




                <div>        
        <div class="modal-body" v-show="modalShow">
            <h4 class="oswald">Вакансия
                <span @click="modalShow = !modalShow" class="close_btn">x</span>
            </h4>
            <input type="text" placeholder="Название" class="w-100"><br />
            <select name="" id="" class="w-100">
                <option value="">Срок</option>
            </select><br />
            <input type="text" placeholder="Зарплата" class="w-100"><br />
            <select name="" id="" class="w-100">
                <option value="">Выберите тип</option>    
            </select><br />
            <textarea name="" id="" class="w-100">Условия</textarea><br />
            <textarea name="" id="" class="w-100">Требования</textarea><br />
            <button class="btn but_or w-100">Сохранить</button> 
        </div> </div>
    </div>
    <!--modal-->
 
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
            modalShow: false,
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
    // computed:{
    //     filteredCompnylist: function() {
    //         return this.data.filter((company) => {
    //             return company.title.match(this.search);
    //         })
    //     }
    // }
}
</script>