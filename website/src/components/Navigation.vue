<template>
    <header class="navbar navbar-expand-lg bg-light mb-3">
        <div class="container-fluid">
            <router-link to="/" class="navbar-brand" href="#">RJ TODO APP</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Todo List</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/new/todo" class="nav-link">Create ToDo</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/new/category" class="nav-link">Create Category</router-link>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                    <li class="nav-item">
                        <router-link to="/categories" class="nav-link">Categories</router-link>
                    </li>
                </ul>
                
            </nav>
        </div>
    </header>
</template>

<script>
export default {

}
</script>

<style>
nav a.router-link-exact-active {
    text-decoration: underline;
    text-decoration-thickness: 3px;
    text-decoration-color: #0d6efd!important;
}
</style>