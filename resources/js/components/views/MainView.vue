<template>
  <div class="home">
    <MainContainer>
      <div class="box">
        <h4>Ваша роль</h4>
          <div class="row">
            <div class="col-12 col-lg-6">
              <a href="">Работадатель</a>
            </div>
            <div class="col-12 col-lg-6">
              <a href="">Соискатель</a>
            </div>
          </div>
      </div>
    </MainContainer>
  </div>
</template>
<script>
// @ is an alias to /src
import MainContainer from '../allcomp/MainContainer.vue'

export default {
  name: 'HomeView',
  components: {
    MainContainer,
  }
}
</script>
