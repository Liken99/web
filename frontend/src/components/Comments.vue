<template>
    <div class="comments">
        <ul>
            <li v-for="comment in comments">
                {{comment.text}}
                <time class="small text-muted">{{comment.createdAt}}</time>
            </li>
        </ul>

    </div>
</template>

<script>
    export default {
        name: "Comments",
        props: ["comments"]
    }
</script>
