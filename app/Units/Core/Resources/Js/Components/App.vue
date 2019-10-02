<!--
- App.vue
-
- @author Breno Pereira <breno.pereira@alumiar.me>
- @package Flexpeak
-
-->

<template>
    <div>
        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'users' }">Hello World</router-link>
        </p>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
