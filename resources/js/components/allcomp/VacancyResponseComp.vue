<template>
    <div>
        <h5 class="oswald">Графический дизайнер - BI GROUP</h5>
        <table class="response_list">
            <tr>
                <th class="oswald">ФИО</th>
                <th class="oswald">О Соискателе</th>
                <th class="oswald">Желаемая зарплата</th>
                <th class="oswald">Опыт работы</th>
                <th class="oswald">Образование</th>
            </tr>
            <tr v-for="student in students" :key="student.id">
                <td class="monserat"><b>{{ student.fio }}</b></td>
                <td class="monserat">{{ student.about }}</td>
                <td class="monserat">{{ student.sallary }}</td>
                <td class="monserat">{{ student.experience }}</td>
                <td class="monserat">{{ student.education }}</td>
                <td><a :href="`tel:${student.contact}`">{{ student.contact }}</a></td>
            </tr> 
        </table>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
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
                },
                {
                id: 2,
                photo: 'images/photo.jpg',
                fio: 'Отыншиева Айнур Мусаевна',
                sallary: '1 550 000',
                experience: '1 - 3 года',
                education: 'Высшее',
                about: 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Labore delectus repellat ad voluptatibus officia deserunt omnis voluptates, tenetur saepe culpa enim velit. Rem accusamus rerum dolorum minima natus laboriosam exercitationem.em',
                vuz: 'МОК',
                lang: 'русский, казахский, корейский',
                schedule: 'частичная занятость',
                contact: '+7 707 221 59 91'
                },
            ]
        }
    }
}
</script>