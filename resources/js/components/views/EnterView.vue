<template>
    <div class="container">
    <div class="row">
        <div class="box radius col-md-4 monserat">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="btn tab-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Регистрация</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="btn tab-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Авторизация</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!--Регистрация-->
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <h5><b>Ваша роль</b></h5>
                    <div class="row gutter">
                        <div class="col-6">
                            <button class="btn tab-link" data-bs-toggle="modal" data-bs-target="#rabotadatel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Работадатель</button>
                        <div class="modal fade" id="rabotadatel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title oswald" id="exampleModalLabel"><b>Регистрация компании</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                            <div class="step" v-show="step === 1">
                                            <input v-model="company.title" type="text" placeholder="Название компании">
                                            <input v-model="company.address" type="text" placeholder="Адрес">
                                            <input v-model="company.bin" type="text" placeholder="БИН / ИИН">
                                            <input v-model="company.iik" type="text" placeholder="ИИК">
                                            <input v-model="company.kbe" type="number" placeholder="КБЕ">
                                            <button @click="nextStep" class="btn but_or w-100">Далее</button>
                                        </div>
                                        <div class="step" v-show="step === 2">
                                            <input v-model="company.phone" type="text" placeholder="Телефон">
                                            <input v-model="company.email" type="text" placeholder="Email">
                                            <input v-model="company.password" type="password" placeholder="Придумайте пароль">
                                            <input v-model="company.password_confirmation" type="password" placeholder="Повторите пароль">
                                            <button @click="backStep" class="btn w-100">Назад</button>
                                            <button @click.prevent="signup" type="submit" class="btn but_or w-100">Зарегистрироваться</button>
                                        </div>
                                    </div>    
                                </div>
                                </div>
                            </div>
                        </div>        
                        </div>
                        <div class="col-6">
                            <button class="btn tab-link" data-bs-toggle="modal" data-bs-target="#soiskatel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                                </svg>
                                Соискатель</button>
                        <div class="modal fade" id="soiskatel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title oswald" id="exampleModalLabel"><b>Регистрация соискателя</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Фамилия">
                                        <input type="text" placeholder="Имя">
                                        <input type="text" placeholder="ИИН">
                                        <input type="text" placeholder="GPA">
                                        <input type="text" placeholder="Контакты">
                                        <input type="text" placeholder="Email">
                                        <input type="text" placeholder="Придумайте пароль">
                                        <button type="submit" class="btn but_or w-100">Зарегистрироваться</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>        
                        </div>
                    </div>
                </div>
                <!--авторизация-->
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><CompanyList :data="listData" />
                        <h5><b>Авторизация</b></h5>
                        <input type="text" placeholder="Email">
                        <input type="password" placeholder="Пароль"><br>
                        <p>Забыли пароль?</p>
                        <button class="btn but_or w-100">Войти</button>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
    </div> 
</template>

<script>


export default {
  data(){
      return {
          step: 1,
          company: {
              title: 'Maksat',
              address: 'Almaty',
              bin: '123456', 
              iik: '123456',
              kbe: '123456',
              email: 'janatmaksat@gmail.com',
              phone: '87475629170',
              password: '12345',
              password_confirmation: '123456',
          }
      }
  },
    methods:{

        nextStep(){
            this.step++;
        },
        backStep() {
            this.step --;
        },
        signup() {
            axios.post("/api/company-registration", this.company)
            .then(response => {
                console.log(response)
            }).then(error => {
                console.log(response)
            })
        }
    }
}
</script>

<style>
    .background {
        /*background-image: url(../assets/images/job_fair_background.jpg);*/
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        left: 0;
        background-size: cover;
        z-index: -999;
        background-repeat: no-repeat;
        overflow-x: hidden;
        overflow-y: hidden;
    }
    .w-100 {
        width: 100%;
        margin-top: 3%
    }
</style>