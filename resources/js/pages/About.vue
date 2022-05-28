<template>
    <div class="container my-size-vh">
        <div class="row">
            <div class="col-12 p-5">
                <h1>
                    About Us
                </h1>
            </div>
            <div class="col-6 p-2"
            v-for="(paragraph, index) in paragraphs"
            :key="index">
                <p>
                    {{paragraph}}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"AboutUs",
    data(){
        return{
            paragraphs : [
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facilis quidem provident molestiae voluptatibus laborum deserunt quam illo possimus, accusantium dolore tenetur ducimus unde eveniet omnis similique ad consequuntur asperiores.',
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facilis quidem provident molestiae voluptatibus laborum deserunt quam illo possimus, accusantium dolore tenetur ducimus unde eveniet omnis similique ad consequuntur asperiores.'
            ]
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
