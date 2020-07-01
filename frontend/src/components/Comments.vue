<template>
    <div class="comments">
        <ul>
            <li v-for="(comment,index) in comments">
                {{comment.text}}
                <time>{{comment.createdAt}}</time>
                &nbsp;
                <small v-on:click="removeComment(index)" class=" btn-remove">delete</small>
            </li>
        </ul>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <textarea v-model="text" v-on:keydown="saveFromKey" class="form-control"></textarea>
                </div>
            </div>
                <div class="mt-1">
                    <button v-on:click="saveFromButton" class="btn btn-primary btn-sm">Добавить</button>
                </div>
        </div>
    </div>
</template>

<script>
    import HTTP from "./http";

    export default {
        name: "comments",
        props:["comments","film"],
        data(){
            return{
                text:''
            };
        },
        methods:{
            saveComment: function(){
                if(this.text.length > 0){
                    let data ={
                        filmId: this.film.id,
                        text: this.text
                    };
                    HTTP.post('/comments',data)
                        .then(response => (
                            this.comments.push(response.data)
                        ));
                    this.text='';
                }
            },
            saveFromButton: function(){
                if(this.text.length >0){
                    this.saveComment();
                }
            },
            saveFromKey:function (event) {
                if(event.key==='Enter' && this.text.length > 0){
                    this.saveComment();
                    event.preventDefault();
                }
            },
            removeComment:function(index){
                let id = this.comments[index].id;
                HTTP.delete('/comments/' + id);
                this.comments.splice(index,1);

            }
        }
    }
</script>
<style>
    .btn-remove:hover{
        color:blue;
        cursor: pointer;
    }
</style>
