<template>
    <div>
        <h1>The test page <router-link to="training">Training</router-link></h1>
        <h4>State</h4>
        <pre>
            {{ this.$store.state.student }}
        </pre>
    </div>
</template>

<script>

export default {
    
}
</script>
