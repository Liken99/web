<template>
    <div>
        <div class="container row">
            <article class="kitchen" v-for="job in jobs">
                <h3 class="text1">{{job.title}}</h3>
                <p class="text2">{{job.text}}</p>
                <div class="img"><img v-bind:src="job.image"></div>

            </article>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";
    import Myfooter from "./Myfooter";
    export default {
        name: "Sport",
        components: {
            Myfooter,
        },
        data() {
            return {
                jobs: []
            }
        },
        created() {
            HTTP.get('/sports')
                .then(response => (this.jobs = response.data));
        }
    }




</script>

<style>
    .text1{
        width: 1000px;
        margin: 0 auto;
        margin-right: 710px;
        margin-top: 50px;
        font-size: 25px;
    }
    .text2{
        width: 1000px;
        margin: 0 auto;
        margin-right: 710px;
        font-size: 20px;
    }
    .img{
        width: 500px;
        margin: 0 auto;
        margin-right: 150px;
        margin-top: -250px;
    }

</style>