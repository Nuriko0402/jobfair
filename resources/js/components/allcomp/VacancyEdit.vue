<template>
        <div class="monserat vacancyedit">
            <h5 class="oswald">Создать вакансию
                <span @click="closeModal" class="close_btn">x</span>
            </h5>
            <input v-bind:value="title" type="text" placeholder="Наименование вакансии" class="w-100" required><br />
            
            <select v-bind:value="srok" id="" class="w-100" required>
                <option value="">Срок</option>
            </select><br />

            <select v-bind:value="practice" id="" class="w-100" required>
                <option value="">Занятость</option>
            </select><br />

            <input v-bind:value="salary" type="text" placeholder="Зарплата" class="w-100" required><br />

            <select v-bind:value="tip" id="" class="w-100" required>
                <option value="">Выберите тип</option>    
            </select><br />

            <textarea v-bind:value="description" id="" class="w-100" placeholder="Описание вакансии" required></textarea><br />

            <button class="btn but_or w-100" @click="createPost">Создать</button> 
        </div>   
</template>

<script> 
export default {
    methods: {
        closeModal(){
            this.$emit('closeMe');
  
        }
    }

}
</script>