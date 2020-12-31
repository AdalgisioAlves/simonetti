<template>
  <div class="NovoPost">
    <div class="container">
      <div class="row">
        <div class="col-2">.</div>
        <div class="col-6">
          <div class="form-row">
            <label for="titulo">Titulo</label>
            <input
              type="text"
              class="form-control"
              v-model="post.titulo"
              placeholder="Titulo"
              id="titulo"
            />
          </div>
          <div class="form-row">
            <label for="titulo">Url da Imagem</label>
            <input
              type="text"
              class="form-control"
              v-model="post.url_image"
              placeholder="Titulo"
              id="titulo"
            />
          </div>
          <input type="hidden" value="2" />
          <div class="form-row">
            <label for="exampleFormControlTextarea1">Texto</label>
            <textarea
              class="form-control"
              v-model="post.texto"
              id="texto"
              rows="3"
            ></textarea>
          </div>
          <br />
          <div class="form-row">
            <button class="btn btn-primary" @click="salvarPost">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "NovoPost",
  props: {
    msg: String,
  },
  data() {
    return {
      post: {
        'titulo': "",
        'texto': "",
        'url_image': "",
        'id_autor': 2
      },
    };
  },
  methods: {
    salvarPost: function () {
 
      
      axios
        .post("http://localhost:88/api/posts", this.post)
          .then((response) => {
          
          if(response.status =='201')alert('Post Salvo com Sucesso');
          this.$router.push('/');

        })
        .catch((response) => {
          alert('Erro ao salvar Post');
          console.log(response);
          
        });
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
