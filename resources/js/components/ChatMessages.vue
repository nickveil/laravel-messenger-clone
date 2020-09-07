<template>
    <!-- <blockquote class="blockquote text-center" v-for="message in messages">
        <p class="mb-0">{{message.message}}</p>
        <footer class="blockquote-footer">{{message.user.name}}</footer>
    </blockquote> -->
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>

<style>

</style>