<template>
    <div class="row">
        <div class="col-6">
            <div v-for="student in students" :key="student.id" class="student_information">
                <div class="row flexend">
                    <div class="col-md-4">
                        <img :src="student.photo" :alt="student.fio">
                        </div>
                    <div class="col-md-8">
                        <h6 class="oswald">{{student.fio}}</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="paragraph">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                    </svg>{{ student.sallary }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="paragraph">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>{{ student.experience }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="paragraph">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                                    </svg>{{ student.education }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>

        </div>
        <div v-for="student in students" :key="student.id">
            <h4 class="oswald">О себе</h4>
            <p><b>Кратко о себе:</b><br />
                {{student.about}}
            </p>
            <p><b>Учебное заведение:</b><br />
                {{student.vuz}}
            </p>
            <p><b>Образование:</b><br />
                {{student.education}}
            </p>
            <p><b>Желаемый размер зарплаты:</b><br />
                {{student.sallary}}
            </p>
            <p><b>Опыт работы:</b><br />
                {{student.experience}}
            </p>
            <p><b>Владение языками:</b><br />
                {{student.lang}}
            </p>
            <button class="but_or btn" @click="isShowing = !isShowing">Редактировать</button>
            <student-inform-edit v-show="isShowing"/>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            search:'',
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
            isShowing: false
        }
    }

}
</script>
 