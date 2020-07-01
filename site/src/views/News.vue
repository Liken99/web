<template>
    <div>
        <div class="container row1">
            <article class="little">
                <h5>Новости сегодня<br></h5>
            </article>
        </div>


        <div class="container row2">
            <news1 class="text"> </news1>
            <p class="image"><img src="../../public/news1.jpg" /><br><br>
                <img src="../../public/news2.jpg" /> <br><br>
                <img src="../../public/news3.jpg" /> <br><br>
                <img src="../../public/news4.jpg" /> <br><br>
                <img src="../../public/news5.jpg" /> <br><br> </p>
        </div>
        <section>
            <!-- Содержимое страницы -->
            <div class="content">
                <section>
                    <myfooter></myfooter>
                </section>

            </div>
        </section>

    </div>
</template>

<script>
    import Myfooter from "../components/Myfooter";
    import News1 from "../components/News1";
    export default {
        name: "News",
        components: {
            Myfooter,
            News1
        }
    }

</script>

<style>
    .text{
        margin-top: 30px;
    }
    .image{
        margin-left: 1px;
    }
    .row1{
        margin-left: 200px;
        margin-top: -100px;
        font-size: 45px;
        display: flex;
        flex-direction: row;
        justify-content:flex-start;
    }
    .row2{
        margin-left: 200px;
        margin-top: 10px;
        font-size: 25px;
        display: flex;
        flex-direction: row;
        justify-content:flex-start;
    }

    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 100px;
    }

</style>