<template>
<div>
    <div v-for="company in companies" :key="company.id" class="companyinformation">
        <div class="row">
            <div class="col-lg-2">
                <img src="/images/bi.png" :alt="company.title">
            </div>
            <div class="col-lg-6">
                <h4 class="oswald">{{company.title}}</h4>
                <p>{{company.text}}</p>
                <button class="but_or btn" @click="modalShow = !modalShow">Редактировать</button>
            </div>
        </div>
        <!--modal-->
        <div class="modal-body" v-show="modalShow">
            <h4 class="oswald">{{company.title}}
                <span @click="modalShow = !modalShow" class="close_btn">x</span>
            </h4>
            <input type="text" :placeholder="company.title" class="w-100"><br />
            <select name="" id="" class="w-100">
                <option value="">{{company.srok}}</option>
            </select><br />
            <input type="text" :placeholder="company.salary" class="w-100"><br />
            <select name="" id="" class="w-100">
                <option value="">{{company.tip}}</option>    
            </select><br />
            <textarea name="" id="" class="w-100">Условия</textarea><br />
            <textarea name="" id="" class="w-100">Требования</textarea><br />
            <button class="btn but_or w-100">Сохранить</button> 
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
                    text: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    requirement: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                    salary: '250 000 тг',
                    practice: '1 - 3 года',
                    srok: '6 месяцев',
                    vacancyName: 'Строитель',
                    tip: 'Практика',
                    logo: '/public/images/bi.png'
                },
            ]
        }
    }
}
</script>
