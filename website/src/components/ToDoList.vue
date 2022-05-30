<template>
    <div class="container mx-auto">
        <ul v-if="todos[0]" class="list-group">
            <li v-for="todo in todos" :key="todo.id" class="list-group-item d-flex justify-content-between">
                <span>{{ todo.content }}</span>
                <span v-if="todo.category_id" class="badge text-black" :style="'background-color: ' + todo.category_color ">{{ todo.category_name }}</span>
            </li>
        </ul>
        <div v-else-if="todos.error">
            {{ todos.error }}
        </div>
        <div v-else>
           Loading Todos...
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            todos: []
        }
    },
    mounted() {
        fetch("/api/get_todos.php")
            .then((res) => res.json())
            .then((data) => (this.todos = data))
            .catch((error) => console.log(error.message));
    },
}
</script>

<style>
</style>