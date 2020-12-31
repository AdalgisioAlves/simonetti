<template>
  <div class="Home" id="Home">  

    <main class="container">    

      <div class="row mb-2" v-if="posts.length > 0">
        <div class="col-md-6" v-for="(post, index) in posts" v-bind:key="index">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary"> {{post.titulo}}</strong>
              <img v-bind:src="post.url_image" class="img-thumbnail text-center" style="width:200px">
              <div class="card-text mb-auto"> {{post.texto.substring(0,60)  }}</div>
              <div class="mb-1 text-muted">{{post.created_at}} </div>
              <p class="card-text mb-auto">
              {{post.autor}}
              </p>
              <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" />
            
            </div>
          </div>
        </div>
        
      </div>      <!-- /.row -->
    </main>
    <!-- /.container -->

    
  </div>
</template>

<script>
import axios from 'axios';
export default {  
  name: "Home",
  props: {
    msg: String, 
     
  },
  data() { 
    return{
      posts: [],
      src: ''
    }    
      
     
  },
  methods: {
      getPosts(){
        let self = this
        axios
        .get('http://localhost:88/api/posts')
        .then(response => {
          
          self.posts = response.data
           
        })
      },
    
           
  },
  created() {
    this.getPosts()
    
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
 
</style>
