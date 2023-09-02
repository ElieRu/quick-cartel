<script setup>
definePageMeta({
    middleware: ['auth']
})
</script>

<template>
    <h1>update link</h1>
    <p>go back</p>
    <form>
        <label>
            <div>short link</div>
            <input type="text">
        </label>

        <label>
            <div>full link</div>
            <input type="text">
        </label>

        <button class="btn">update link</button>
    </form>
</template>