<template>
    <div class="company_filter_mob">
        <h5 class="center oswald">Специализации
            <span @click="closeModal" class="close_btn">x</span>
        </h5><hr />
        <div>Все(35)</div><hr />
        <div>Административный персонал</div><hr />
        <div>Безопасность</div><hr />
        <div>Высший менеджмент</div><hr />
        <div>Добыча сырья</div><hr />
        <div>Домашний, обсуживающий персонал</div><hr />
        <div>Закупки</div><hr />
        <div class="row">
            <button class="but_or btn col-5">Сбросить</button>
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
<style>
    .col-5 {
        width: 48%;
    }
</style>
