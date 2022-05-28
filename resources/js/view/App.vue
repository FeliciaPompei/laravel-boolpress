<template>
    <div>
        <Header/>
        <Main/>
        <Footer/>
    </div>
</template>

<script>
import Header from "../components/Header.vue"
import Main from "../components/Main.vue"
import Footer from "../components/Footer.vue"

export default {
    name: "App",
    components:{
        Header,
        Main,
        Footer
    }
}
</script>
<style lang="scss">
body{
    font-family: 'Montserrat', sans-serif;
}
.my-size-vh{
    height: 56.7vh;
}
h1{
    font-size:3.5rem;
    color:gray;
}
</style>
