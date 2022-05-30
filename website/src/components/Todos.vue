<template>
    <div class="container mx-auto">
        <ul v-if="todos[0]" class="list-group">

            <li v-for="todo in todos" :key="todo.id" class="list-group-item">
                <form action="/api/delete_todo.php" class="d-flex justify-content-between">
                    <input type="hidden" :value="todo.id" name="todo_id">
                    <span>{{ todo.content }}</span>
                    <div>
                        <div v-if="todo.category_id" class="badge text-black me-2 align-middle"
                            :style="'background-color: ' + todo.category_color + '50'">
                            <span>{{ todo.category_name }}</span>
                        </div>
                        <button type="submit" class="btn btn-sm btn-danger text-right" title="Delete ToDo">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
        <div v-else-if="todos.error">
            {{ todos.error }}
        </div>
        <div v-else>
            Loading <div class="spinner-border spinner-border-sm text-primary" role="status"></div>
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