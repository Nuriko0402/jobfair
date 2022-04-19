<template>
        <div class="monserat vacancyedit">
            <h5 class="oswald">Создать вакансию
                <span @click="closeModal" class="close_btn">x</span>
            </h5>
            <input type="text" placeholder="Название" class="w-100"><br />
            <select name="" id="" class="w-100">
                <option value="">Срок</option>
            </select><br />
            <input type="text" placeholder="Зарплата" class="w-100"><br />
            <select name="" id="" class="w-100">
                <option value="">Выберите тип</option>    
            </select><br />
            <textarea name="" id="" class="w-100">Описание вакансии</textarea><br />
            <button class="btn but_or w-100" @click="createPost">Создать</button> 
        </div>   
</template>

<script> 
export default {
    methods: {
        closeModal(){
            this.$emit('closeMe');
        createPost() {

        }    
        }
    }

}
</script>