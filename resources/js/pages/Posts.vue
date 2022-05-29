<template>
    <div class="container">
        <div class="row"
        v-if="posts.length === 0">
            <div class="col-12">
                <Loader/>
            </div>
        </div>
        <div v-else>
            <Post v-for="(post, index) in posts" :key="index" :post = "post" />

        <div class="d-flex justify-content-between p-3">
            <div
            v-if="activePage.currentPage > 1"
            @click="getPosts(activePage.currentPage - 1)">
            <button
            class="btn btn-info fs-1">
                &#8656;
            </button>
        </div>
        <div
        v-if="activePage.currentPage < activePage.lastPage"
        @click="getPosts(activePage.currentPage + 1)">
            <button
            class="btn btn-info fs-1">
                &#8658;
            </button>
        </div>
        </div>
        </div>
    </div>
</template>

<script>
import Post from '../components/Post.vue';
import Loader from '../components/Loader.vue';
export default {
    name:'postslist',
    components:{
        Post,
        Loader
    },
    data(){
        return{
            posts : [],
            activePage : {},
        }
    },
    methods:{
        getPosts(page){
            axios
            .get(`http://127.0.0.1:8000/api/posts?page=${page}`)
            .then((results) => {
                // console.log(results.data.data)
                this.posts = results.data.data;
                console.log(this.posts)
                const { current_page, last_page } = results.data;
                this.activePage = {currentPage : current_page, lastPage : last_page};
            })
            .catch((error) => {
                console.warn(error)
            });
        }
    },
    created(){
        setTimeout(this.getPosts(1), 20000)
    }
}
</script>

<style lang="scss">

</style>
