<template>
  <main-container>
    <div class="menu oswald">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a href="/" class="navbar-brand">
            <img src="/images/logo/mok_logo.png" alt="логотип МОК" class="width_logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href ="/" class="nav-link active" aria-current="page">ГЛАВНАЯ</a>
              </li>
              <li class="nav-item">
                <a href ="/top-companies" class="nav-link active" aria-current="page">ТОП 5 КОМПАНИЙ</a>
              </li>
              <li class="nav-item">
                <a href ="/list-companies" class="nav-link active" aria-current="page">СПИСОК КОМПАНИЙ</a>
              </li>
              <li class="nav-item">
                <a href ="/vacancy-response" class="nav-link active" aria-current="page">ОТКЛИКИ</a>
              </li>
              <li class="nav-item">
                <a href ="/company-view" class="nav-link active" aria-current="page">КОМПАНИЯ</a>
              </li>
            </ul>
          </div>
        </div>
        <div><a href="enter-view" class="btn but_or main_enter"><span>АВТОРИЗОВАТЬСЯ</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
        </a></div>
        
      </nav>
      <slot></slot>
    </div>
  </main-container>
</template>

<script>
import MainContainer from '../allcomp/MainContainer.vue'
export default {
  components: { MainContainer }
}
</script>
