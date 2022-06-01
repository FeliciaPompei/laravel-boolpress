<template>
    <header class="container-fluid mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <router-link class="nav-link"
                :to="{ name: navLinks[0].routeLink }">
                    <img class="img-fluid w-50"
                    src="img/BoolPress.jpg" alt="boolpress logo">
                </router-link>
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"
                        v-for="(navLink, index) in navLinks" :key="index">
                            <router-link class="nav-link"
                            :to="{ name: navLink.routeLink}">
                                {{navLink.name}}
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
<script>
export default {
    name: "headerIndex",
    data(){
        return{
            navLinks:[
                {
                    routeLink: "home",
                    name: "Home"
                },
                {
                    routeLink: "about",
                    name: "About"
                },
                {
                    routeLink: "posts",
                    name: "Posts"
                },
                {
                    routeLink: "contacts",
                    name: "Contacts"
                }
            ]
        }
    }
}
</script>

<style>

</style>
