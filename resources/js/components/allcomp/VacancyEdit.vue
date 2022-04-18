<template>
    <!--modal-->
        <div class="modal-body" v-show="isShowing">
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
        </div>   
</template>

<script> 
export default {
    data() {
        return {
            modalShow: false,
        }
    },
}
</script>