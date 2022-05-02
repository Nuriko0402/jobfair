<template>
    <div class="main_filter monserat company_search row">
        <div class="col-lg-3">
            <label for="">Тип занятости</label><br />
            <select class="btn radius">
                <option 
                    v-for="(employment_type) in employment_types" 
                    :key="employment_type.id" 
                    :value="employment_type.id">
                    {{ employment_type.name }}
                </option>
        </select>
        </div>

        <div class="col-lg-3">
            <label for="">График работы</label><br />    
            <select class="btn radius">
                <option 
                    v-for="schedule in schedules" 
                    :key="schedule.id" 
                    :value="schedule.id">
                    {{ schedule.name }}
                </option>
            </select>
        </div>

        <div class="col-lg-3">
            <label for="">Опыт работы</label><br />
            <select class="btn radius">
                <option 
                    v-for="experience in experiences" 
                    :key="experience.id"
                    :value="experience.id">
                    {{  experience.name }}
                </option>
            </select>
        </div>  
    </div>
</template>

<script>


export default {
    data() {
        return {
            employment_types: [
                { id: 1, name: 'не имеет значения' },
                { id: 2, name: 'полная занятость' },
                { id: 3, name: 'частичная занятость' },
                { id: 4, name: 'стажировка'},
                { id: 5, name: 'проектная работа'},
                { id: 6, name: 'волонтерство'},
        
            ],
            schedules: [
                { id: 1, name: 'не имеет значения' },
                { id: 2, name: 'полный день' },
                { id: 3, name: 'сменный график' },
                { id: 4, name: 'удаленная работа' },
                { id: 5, name: 'гибкий график' }
            ],
            experiences: [
                { id: 1, name: 'не имеет значения' },
                { id: 2, name: 'от 1 года до 3 лет' },
                { id: 3, name: 'нет опыта' },
                { id: 4, name: 'от 3 до 6 лет' },
                { id: 5, name: 'более 6 лет}' }
            ],
            inputSearch: '',
            selectCategory: 0,
        }
    },


}
</script>