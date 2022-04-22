<template>
    <div class="main_filter monserat company_search">
        <select class="btn radius">
            <option disabled value="">Тип занятости</option>
            <option>полная занятость</option>
            <option>частичная занятость</option>
            <option>стажировка</option>
            <option>проектная работа</option>
            <option>волонтерство</option>
        </select>

        <select class="btn radius">
            <option disabled value="">График работы</option>
            <option>полный день</option>
            <option>сменный график</option>
            <option>удаленная работа</option>
            <option>гибкий график</option>
        </select>

        <select class="btn radius">
            <option disabled value="">Опыт работы</option>
            <option>не имеет значения</option>
            <option>от 1 года до 3 лет</option>
            <option>нет опыта</option>
            <option>от 3 до 6 лет</option>
            <option>более 6 лет</option>
        </select>
        <!--поиск-->
        <input class="input_icon" type="text" placeholder="Введите название организации" />
    </div>
</template>

<script>
