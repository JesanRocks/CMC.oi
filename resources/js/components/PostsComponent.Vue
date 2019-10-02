<template>
  <div>
    <div class="card-columns" >
      
      <div class="card" v-for="post in posts">
        
          <img :src="post.file" class="card-img-top img-fluid">
          <div class="card-body">
            <h5 class="card-title text-dark">
              <a :href="post.slug">
                @{{post.name}}
              </a>
            </h5>
            <p class="card-text text-dark">@{{post.excerpt}}</p>
            <p class="card-text">
              <small class="text-muted">Publicado el: @{{post.created_at}}</small>
            </p>
          </div>
      </div>
      
    </div>

    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
    import axios from 'axios'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            posts:[],
          }
        },
        created:function() {
          this.getPosts();
        },
        methods:{
          getPosts: function(){
            var urlPosts = 'blog';
            axios.get(urlPosts).then(response => {
                this.posts = response.data;
            });
          },
        
        }
    }
</script>