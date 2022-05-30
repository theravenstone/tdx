<template>
    <div class="container mx-auto">
        <form action="">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">ToDo Content</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>None</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Select Category</label>
                    </div>
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