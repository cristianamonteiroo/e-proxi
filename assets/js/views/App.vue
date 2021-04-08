<template>
  <div>
    <Header />
    <FirstPage />
    <SecondPage />
  </div>
</template>

<script>
import FirstPage from '../components/FirstPage.vue'
import SecondPage from '../components/SecondPage.vue'
import Header from '../components/Header.vue'

export default {
 name: 'App',
  components: {
    FirstPage,
    SecondPage, 
    Header
  }
};
</script>

<style>
.center {
  text-align: center;
}
</style>