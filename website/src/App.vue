<template>
  <div class="text-center mx-auto" style="max-width: 768px">
    <Navigation/>
    <h1 class="display-4">{{ $route.name }}</h1>
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
