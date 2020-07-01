<template>
    <div>
        <div class="container row">
                <article class="kitchen" v-for="job in jobs">
                <h class="text">{{job.text}}</h>
                <div class="img"><img v-bind:src="job.image" ></div>

            </article>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";
    import Myfooter from "./Myfooter";
    export default {
        name: "News",
        components: {
            Myfooter,
        },
        data() {
            return {
                jobs: []
            }
        },
        created() {
            HTTP.get('/dimons')
                .then(response => (this.jobs = response.data));
        }
    }




</script>

<style>


</style>