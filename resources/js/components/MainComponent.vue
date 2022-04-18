<template>
  <nav class="wrap d-flex flex-column min-vh-100">
    <TheHeader />
    <main class="flex-fill">
      <!-- <router-view /> -->
      <main-page />
      

    </main>
  </nav>
</template>
<script>
import TheHeader from './layouts/TheHeader.vue'
import MainPage from './views/MainPage.vue'


  export default {
    components: {
        TheHeader,
        MainPage,

    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
