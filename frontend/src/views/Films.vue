<template>
    <div class="films">
        <h1>This is films</h1>
        <article v-for="film in films">
            <h4>{{film.title}}</h4>
            <Comments :film="film" :comments="film.comments"></Comments>
        </article>
    </div>
</template>

<script>
    import Comments from "../components/comments";
    import HTTP from "../components/axios";
    export default {
        name: "films",
        components: {Comments},
        data(){
            return {
              films:[

              ]
            };
        },
        created(){
            HTTP.get('/films')
                .then(response => (this.films = response.data));
        }
    }
</script>

