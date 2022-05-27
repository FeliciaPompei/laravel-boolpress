<template>
    <footer class="container-fluid">
    <div class="row p-3">
        <div class="col-2 p-2"
        v-for="(link, index) in footerLinks"
        :key="index">
            <h5>
                {{link.lable}}
            </h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"
                v-for="(link, index) in footerLinks"
                :key="index">
                    <a :href="link.link" class="nav-link p-0 text-muted">
                    {{link.lable}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
            <img class="img-fluid w-50 h-50"
            src="img/Boolpress.jpg"
            alt="boolpress logo">
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-centerpy-1 border-top">
        <p>© 2022 Company, Inc. All rights reserved.</p>
    </div>
</footer>
</template>

<script>
export default {
    name: "FooterIndex",
    data(){
        return {
            footerLinks : [
                {
                    link: "#",
                    lable: "Link"
                },
                {
                    link: "#",
                    lable: "Link"
                },
                {
                    link: "#",
                    lable: "Link"
                },
                {
                    link: "#",
                    lable: "Link"
                }
            ]
        }
    }
}
</script>

<style>

</style>
