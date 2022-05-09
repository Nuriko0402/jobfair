<template>
    <div>
        <!--поиск-->
        <input class="input_icon" type="text" placeholder="Введите название компании или вакансии" />
        <br />  
        <br />      
        <table class="response_list">
            <tr>
                <th class="oswald">Компания</th>
                <th class="oswald">Вакансия</th>
                <th class="oswald">Предлагаемая зарплата</th>
                <th class="oswald">Опыт работы</th>
                <th class="oswald">Статус</th>
                <th></th>
            </tr>
            <tr v-for="vacancy in vacancies" :key="vacancy.id">
                <td class="monserat"><b class="bold">{{ vacancy.company }}</b></td>
                <td class="monserat"><b class="bold">{{ vacancy.title }}</b></td>
                <td class="monserat">{{ vacancy.salary }}</td>
                <td class="monserat">{{ vacancy.experience }}</td>
                <td><span class="or">Статус</span></td>
                <td><a class="btn but_or">{{vacancy.contact}}</a></td>
            </tr> 
        </table>
                <!--pagination-->
                <div class="pagin mob_none">
                    <ul>
                        <li class="active">6</li> из <li>24</li>
                    </ul>
                </div>
    </div>
</template>

<script>
export default {
    data: {
        vacancies: []
    }
}
</script>
<style scoped>
    .bold {
        font-weight: 800;
    }
    .or {
        color: #EC7D3F;
    }
</style>