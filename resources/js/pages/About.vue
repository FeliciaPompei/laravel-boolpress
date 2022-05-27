<template>
    <div class="container my-size-vh">
        <div class="row">
            <div class="col-12">
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
         paragraph : 'This Boolpress is a production by a boolean student, given the task of reproducting a well known page: wordPress.'
     }
 }
}
</script>

<style lang="scss" scoped>

</style>
