<template>
    <div class="films">
        <h1>Фильмы</h1>
        <article v-for="film in films">
            <h4>{{film.title}}</h4>
            <Comments :comments="film.comments"></Comments>
        </article>
    </div>
</template>

<script>
    import Comments from "../components/Comments";
    import HTTP from "../components/http";
    export default {
        name: "Films",
        components: {Comments},
        data() {
            return {
                films: []
            };
        },
        created() {
            HTTP.get('/films')
                .then(response => (this.films = response.data));
        }
    }
</script>

