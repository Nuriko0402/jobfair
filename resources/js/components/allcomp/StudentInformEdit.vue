<template>
    <div class="StudentCategoryEdit"><br/>
        <h4 class="oswald">О себе</h4>
        <div v-for="student in students" :key="student.id">
            <textarea name="" placeholder="Кратко о себе:"></textarea><br />
            <input type="text" placeholder="Учебное заведение:"><br />
            <select>
                <option value="">dd</option>
                <option value="">Высшее</option>
            </select><br />
            <input type="text" placeholder="Желаемый размер зарплаты:"> <br />
            <select>
                <option value="">Выберите Опыт работы</option>
                <option value="">1 - 3 года</option>
            </select><br />
            <input type="text" placeholder="Владение языками:"><br /> 
            <button class="but_or btn">Сохранить</button>        
        </div>            
    </div>
</template>

<script>
export default {
    data() {
        return{
            students: [
                {
                    id: 1,
                    photo: 'images/photo.jpg',
                    fio: 'Отыншиева Айнур Мусаевна',
                    sallary: '550 000',
                    experience: '1 - 3 года',
                    education: 'Высшее',
                    about: 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Labore delectus repellat ad voluptatibus officia deserunt omnis voluptates, tenetur saepe culpa enim velit. Rem accusamus rerum dolorum minima natus laboriosam exercitationem.em',
                    vuz: 'МОК',
                    lang: 'русский, казахский, корейский',
                    schedule: 'частичная занятость',
                    contact: '+7 707 221 59 91'
                }
            ],
        }
    }
}
</script>
 