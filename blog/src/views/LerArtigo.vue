<template>
  <div class="LerArtigo" id="LerArtigo">
    <main class="container">
      <div class="row">
        <div class="col-10">
          <h2 class="blog-post-title">{{ post[0].titulo }}</h2>
          <p class="blog-post-meta">
            {{ post[0].created_at }}<a href="#"> {{ post[0].autor }}</a>
          </p><br>  
          <p class="text-justfy">
            <img
              v-bind:src="post[0].url_image"
              class="img-thumbnail text-center"
              style="width: 400px"
            />
            {{ post[0].texto }}
          </p>
        </div>
      </div>
      <!-- /.row -->
    </main>
    <!-- /.container -->
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "LerArtigo",
  props: {
    msg: String,
  },
  data() {
    return {
      post: [],
      id: "",
    };
  },
  methods: {
    getPost: function (id) {
      console.log(this.$route.query);
      let self = this;
      axios.get("http://localhost:88/api/posts/" + id).then((response) => {
        self.post = response.data;
      });
    },
  },
  created() {
    let id = this.$router.history.current.query.id;
    if (id) {
      this.getPost(id);
    }
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
