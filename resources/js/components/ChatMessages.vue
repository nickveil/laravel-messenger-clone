<template>
    <blockquote class="blockquote text-center">
        <p class="mb-0">{{message.message}}</p>
        <footer class="blockquote-footer">{{message.user.name}}</footer>
    </blockquote>
</template>

<script>
export default {
    props: ['message']
};
</script>

<style>

</style>