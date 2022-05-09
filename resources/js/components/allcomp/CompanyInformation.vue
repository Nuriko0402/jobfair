<template>
<div>
    <div v-for="company in companies" :key="company.id" class="companyinformation">
        <div class="row">
            <div class="col-lg-3">
                <img src="/images/bi.png" :alt="company.title">
            </div>
            <div class="col-lg-9">
                <h4 class="oswald">{{company.title}}</h4>
                <p>{{company.description}}</p>
                <button class="but_or btn" @click="modalShow = !modalShow">Редактировать</button>
                <!--При нажатии на Редактировать выхоят input-->   
            </div>
            <h4>Отрасль</h4>
            <button class="btn">{{companies.category}}</button>
        </div>    
   </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            modalShow: false,
            companies: [ 
                {
                    id: 1,
                    title: 'Строитель - BI GROUP',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    salary: '250 000 тг',
                    practice: '1 - 3 года',
                    srok: '6 месяцев',
                    tip: 'Практика',
                    logo: '/public/images/bi.png',
                    category: 'Безопасность'
                },
            ]
        }
    }
}
</script>
