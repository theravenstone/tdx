<template>
  <div class="home mt-5">
    <ToDoList></ToDoList>
  </div>
</template>

<script>
// @ is an alias to /src
import ToDoList from '@/components/ToDoList.vue'

export default {
  name: 'HomeView',
  components: {
    ToDoList,
  }
}
</script>
