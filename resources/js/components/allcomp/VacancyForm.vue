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
                v-model="vacancy.experience" 
                class="w-100" 
                required>
                    <option disabled value="">Опыт работы</option>
                    <option>не имеет значения</option>
                    <option>от 1 года до 3 лет</option>
                    <option>нет опыта</option>
                    <option>от 3 до 6 лет</option>
                    <option>более 6 лет</option>
                </select>
                <br />

                <select 
                v-model="vacancy.schedule" 
                class="w-100" 
                required>
                    <option disabled value="">График работы</option>
                    <option>полный день</option>
                    <option>сменный график</option>
                    <option>удаленная работа</option>
                    <option>гибкий график</option>
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
                    <option disabled value="">Тип занятости</option>
                    <option>полная занятость</option>
                    <option>частичная занятость</option>
                    <option>стажировка</option>
                    <option>проектная работа</option>
                    <option>волонтерство</option>
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
                    schedule: '',
                    experience: '',
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
                schedule: '',
                experience: '',
                tip: '' 
            }
        }
    }

}
</script>
<style scoped>
    .w-100 {
        font-size: .8rem;
    }
</style>
