<template>
    <header class="text-info">
        <ul>
            <li>
                <router-link :to="{ name: 'posts'}">
                    Posts
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'home'}">
                    Home
                </router-link>
            </li>
        </ul>
    </header>
</template>

<script>
export default {
    name: "headerIndex",
}
</script>

<style>

</style>
