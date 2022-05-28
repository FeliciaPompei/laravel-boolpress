<template>
    <div class="container my-size-vh d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col-9 text-center mb-5">
                <h1>
                    Welcome To Boolpress
                </h1>
            </div>
            <div class="col-6"
            v-for="(text, index) in content"
            :key="index">
                <p>
                    {{text}}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'Home',
    data(){
        return{
            content : [
                'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia in similique quasi eum enim exercitationem mollitia libero velit et eaque, reprehenderit suscipit quibusdam maxime, dolorem praesentium amet. Molestias, saepe necessitatibus!',
                'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia in similique quasi eum enim exercitationem mollitia libero velit et eaque, reprehenderit suscipit quibusdam maxime, dolorem praesentium amet. Molestias, saepe necessitatibus!'
            ]
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
