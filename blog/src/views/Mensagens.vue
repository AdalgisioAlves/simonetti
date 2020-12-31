<template>
  <div class="Mensagens" id="Mensagens">
    <main class="container">
      <div class="row">
      
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">TELEFON</th>
              <th scope="col">MENSAGEM</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(contato,index ) in contatos" v-bind:key="index">
              <th>{{ contato.id }}</th>
              <th>{{ contato.nome }}</th>
              <th>{{ contato.email }}</th>
              <th>{{ contato.telefon }}</th>
              <th>{{ contato.texto }}</th>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.row -->
    </main>
    <!-- /.container -->
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Mensagens",
  props: {
    msg: String,
  },
  data() {
    return {
      contatos: [],
      id: "",
    };
  },
  methods: {
    getMensagens() {
      let self = this;
      axios.get("http://localhost:88/api/contatos").then((response) => {
        self.contatos = response.data;
      });
    },
  },
  created() {
    this.getMensagens();
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
