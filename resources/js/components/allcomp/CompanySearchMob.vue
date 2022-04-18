<template>
    <div class="main_filter monserat company_search_mob">
        <h5 class="center oswald">Фильтр 
            <span @click="closeModal" class="close_btn">x</span>
        </h5><hr />
        <select name="" id="" class="btn radius">
            <option value="">Стажировка</option>
            <option value="">Полная занятость</option>
            <option value="">Частичная занятость</option>
            <option value="">Проектная работа</option>
            <option value="">Волонтерство</option>
        </select>

        <select name="" id="" class="btn radius">
            <option value="">Гибкий график</option>
            <option value="">Полный день</option>
            <option value="">Сменный график</option>
            <option value="">Удаленная работа</option>
        </select>

        <select name="" id="" class="btn radius">
            <option value="">Нет опыта</option>
            <option value="">От 1 года до 3 лет</option>
            <option value="">От 3 до 6 лет</option>
            <option value="">Более 6 лет</option>
        </select>

        <select name="" id="" class="btn radius">
            <option value="">На 1 мес.</option>
            <option value="">До 6 мес.</option>
            <option value="">От 6 мес. до 1 года</option>
            <option value="">Более 1 года</option>
        </select>

        <select name="" id="" class="btn radius">
            <option value="">Не имеет значения</option>
            <option value="">от 100 000 KZT</option>
            <option value="">от 250 000 KZT</option>
            <option value="">от 500 000 KZT</option>
        </select>
        <div class="row">
            <button class="but_or btn col-5">Сбросить</button>&nbsp;
            <button class="but_or btn col-5">Показать</button>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        closeModal(){
            this.$emit('closeMe')
        }
    }

}
</script>
<style scoped>
    .col-5 {
        width: 49%;
    }
</style>