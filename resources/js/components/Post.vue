<template>
<div class="card mb-3">
    <div class="img-wrapper bg-dark text-center mb-3">
        <img class="card-img-top" :src="post.post_image" :alt="post.title">
    </div>
    <div class="card-body">
        <h5 class="card-title">
            {{post.title}}
        </h5>


        <p class="card-text mb-4">
            {{post.content}}
        </p>
        <blockquote class="blockquote mb-2">
            <footer class="blockquote-footer">
                <cite title="Source Title">
                    {{post.updated_at}}
                </cite>
            </footer>
        </blockquote>
        <p class="card-text">
            <small class="text-muted">

            </small>
        </p>
    </div>
</div>
</template>

<script>
export default {
    name: 'postElement',
    props: ['post'],
}
</script>

<style>

</style>
