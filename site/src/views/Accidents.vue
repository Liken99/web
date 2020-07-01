<template>
    <div>
        <div class="container row1">
            <article>
                <h5>Происшествия в мире<br></h5>
            </article>
        </div>
        <section>
            <div class="poli">
                <section>
                    <accidents1></accidents1>
                </section>
            </div>
        </section>
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
    import Accidents1 from "../components/Accidents1";
    export default {
        name: "Accidents",
        components: {
            Myfooter,
            Accidents1
        }
    }

</script>

<style>
    .row1{
        margin-left: 200px;
        margin-top: -100px;
        font-size: 45px;
        display: flex;
        flex-direction: row;
        justify-content:flex-start;
    }


    /* Содержание страницы. Значение свойства margin-left должно соответствовать значению свойства width боковой панели */
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 100px;
    }

</style>