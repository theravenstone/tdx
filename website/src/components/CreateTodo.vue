<template>
    <div class="container mx-auto">
        <form action="/api/create_todo.php">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="todocontent" placeholder="Buy some food" name="content" required>
                        <label for="todocontent">ToDo Content</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="todocategory" aria-label="Select Category" name="category_id">
                            <option selected>None</option>
                            <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                        </select>
                        <label for="todocategory">Select Category</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-sm btn-success text-right">Create ToDo<i class="fa-solid fa-arrow-right ms-1"></i></button>
                </div>
            </div>
        </form>
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
}
</script>

<style>
</style>