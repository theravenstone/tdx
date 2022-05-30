<template>
  <div class="mt-5 text-center">
    <h1>{{ $route.name }}</h1>
    <Navigation/>
    <router-view />
  </div>
</template>

<script>
// @ is an alias to /src
import Navigation from '@/components/Navigation.vue'

export default {
  name: 'HomeView',
  components: {
    Navigation,
  }
}
</script>

<style>

</style>
