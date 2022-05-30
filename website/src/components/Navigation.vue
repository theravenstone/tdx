<template>
    <nav>
        <router-link to="/" class="btn btn-sm btn-primary mx-1">Todo List</router-link>
        <router-link to="/new/todo" class="btn btn-sm btn-primary mx-1">Create New Todo</router-link>
    </nav>
</template>

<script>
export default {

}
</script>

<style>
nav a.router-link-exact-active {
    color: var(--bs-btn-active-color);
    background-color: var(--bs-btn-active-bg);
    border-color: var(--bs-btn-active-border-color)
}
</style>