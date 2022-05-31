<template>
    <div class="container mx-auto">
        <ul v-if="categories[0]" class="list-group">

            <li v-for="category in categories" :key="category.id" class="list-group-item d-flex justify-content-between"
                :style="'background-color: ' + category.color + '50'">
                <input type="hidden" :value="category.id" name="category_id">
                <div>
                    <span>{{ category.name }}</span>
                </div>
                <div>
                    <router-link :to="'/edit/category/' + category.id" type="submit"
                        class="btn btn-sm btn-primary text-right me-2" title="Edit Category">
                        <i class="fa-solid fa-pen"></i>
                    </router-link>
                    <button type="button" @click="this.deleteCategory(category.id)"
                        class="btn btn-sm btn-danger text-right" title="Delete Category">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </li>
        </ul>
        <div v-else-if="categories.error">
            {{ categories.error }}
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
            categories: []
        }
    },
    mounted() {
        fetch("/api/get_categories.php")
            .then((res) => res.json())
            .then((data) => (this.categories = data))
            .catch((error) => console.log(error.message));
    },
    methods: {
        deleteCategory(todo_id) {
            console.log(todo_id + 'delete')
            fetch("/api/delete_category.php?category_id=" + todo_id)
                .catch((error) => console.log(error.message));
            this.reloadCategories()
        },
        reloadCategories() {
            fetch("/api/get_categories.php")
                .then((res) => res.json())
                .then((data) => (this.categories = data))
                .catch((error) => console.log(error.message));
        }
    }
}
</script>

<style>
</style>