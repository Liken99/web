<template>
    <div>
        <div class="container row1">
            <article>
                <h5>Новости спорта<br></h5>
            </article>
        </div>
        <section>
            <div class="poli">
                <section>
                    <sports1></sports1>
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
    import Sports1 from "../components/Sports1";
    export default {
        name: "Sports",
        components: {
            Myfooter,
            Sports1
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

    .row3{
        margin-left: -810px;
        margin-top: 0px;
    }
    .row4{
        margin-left: 180px;
        margin-top: 0px;
    }

    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 100px;
    }
</style>