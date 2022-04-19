<template>
    <div class="monserat vacancyedit">
            <form @submit.prevent>
                <h5 class="oswald">Создать вакансию
                <span @click="closeModal" class="close_btn">x</span>
                </h5>
                <input 
                v-model="vacancy.title"  
                type="text" 
                placeholder="Наименование вакансии" 
                class="w-100" 
                required>
                <br />
                <select 
                v-model="vacancy.srok" 
                class="w-100" 
                required>
                    <option disabled value="">Срок</option>
                    <option>Срок 2</option>
                </select>
                <br />

                <select 
                v-model="vacancy.practice" 
                class="w-100" 
                required>
                    <option disabled value="">Занятость</option>
                    <option>Занятость 2</option>
                    <option>Занятость 3</option>
                    <option>Занятость 5</option>
                </select>
                <br />

                <input 
                v-model="vacancy.salary" 
                type="text" 
                placeholder="Зарплата" 
                class="w-100" 
                required>
                <br />

                <select 
                v-model="vacancy.tip"  
                class="w-100" 
                required>
                    <option disabled value="">Выберите тип</option>  
                    <option>Выберите тип 2</option>   
                </select>
                <br />

                <textarea 
                v-model="vacancy.description" 
                class="w-100" 
                placeholder="Описание вакансии" 
                required></textarea><br />

                <button class="btn but_or" @click="createVacancy">Создать</button>
            </form>
        </div>
</template>
<script>
export default {

    data(){
        return {
                vacancy: {
                    title: '',
                    description: '',
                    salary: '',
                    practice: '',
                    srok: '',
                    tip: ''
                }
        }
    },
    methods: {
        closeModal(){
            this.$emit('closeMe')
        },
        createVacancy(){
            this.vacancy.id = Date.now();
            this.$emit('create', this.vacancy);
            this.vacancy = {
                title: '',
                description: '',
                salary: '',
                practice: '',
                srok: '',
                tip: '' 
            }
        }
    }

}
</script>
