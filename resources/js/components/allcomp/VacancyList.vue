<template>
<div>
    <div v-show="vacancies.length > 0">
        <h4 class="oswald">Ваши вакансии</h4>
        <transition-group name="vacancy-list" class="row">
            <div class="vacancy_list col-md-3 comp_list_box radius" v-for="vacancy in vacancies" :key="vacancy.id" @remove="$emit('remove', vacancy)">
            <h6 class="oswald"><b>{{ vacancy.title }}</b></h6>
               <p>{{ vacancy.description }}</p>
                   <div class="paragraph">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                           <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                           <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                       </svg><b>{{ vacancy.salary }}</b>
                   </div>
                   <div class="paragraph">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                        </svg><b>{{ vacancy.employment_type }}</b>
                   </div>
                   <div class="paragraph">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                           <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                       </svg><b>{{ vacancy.experience }}</b>
                   </div>
                   <div class="paragraph">
                       <b v-for="(item) in vacancy.category" :key="item.name">{{ item.name }}</b>
                        <pre class="language-json"><code>{{ vacancy.category  }}</code></pre>
                   </div><br/>
                   <button @click="$emit('remove', vacancy)" class="btn but_or">Удалить</button>
            </div> 
        </transition-group>
    </div>
    <h5 v-show="vacancies.length === 0">Список вакансии пуст</h5>
</div>    
</template>
<script>

export default {
    props: {
        vacancies: {
            type: Array,
            required: true
        }
    }
}
</script>
<style scoped>
    h5 {
        padding: 3% 0;
        color: #a5a5a5;
        font-size: 1rem;
    }
    .vacancy-list-item {
        display: inline-block;
        margin-right: 10px;
        }
        .vacancy-list-enter-active, .vacancy-list-leave-active {
        transition: all .5s;
        }
        .vacancy-list-enter, .vacancy-list-leave-to /* .list-leave-active до версии 2.1.8 */ {
        opacity: 0;
        transform: translateY(130px);
        }


</style>
