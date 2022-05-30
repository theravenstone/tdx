<template>
  <div class="home mt-5">
      <CreateTodo/>
  </div>
</template>

<script>
// @ is an alias to /src
import CreateTodo from '@/components/CreateTodo.vue'

export default {
  name: 'CreateTodoView',
  components: {
    CreateTodo,
}
}
</script>

<style>

</style>