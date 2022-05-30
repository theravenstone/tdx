<template>
    <div class="container mx-auto">
        <form action="/api/create_category.php">
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="categoryname" placeholder="Category name"
                            name="name" required>
                        <label for="categoryname">Category name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="categorycolor" class="form-label text-left">Category color</label>
                        <input type="color" class="form-control form-control-color w-100" id="categorycolor"
                            value="#0d6efd" title="Choose your color" name="color">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-sm btn-success text-right">Create Category<i class="fa-solid fa-arrow-right ms-1"></i></button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {

}
</script>

<style>
</style>