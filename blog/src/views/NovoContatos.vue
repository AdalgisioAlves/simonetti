<template>
  <div class="NovoContatos">
    <div class="container">
      <div class="row">
        <div class="col-2">.</div>
        <div class="col-6">
           <div class="form-row"><h3> Fale com nosco</h3></div>
          <div class="form-row">
            <label for="titulo">Nome</label>
            <input
              type="text"
              class="form-control"
              v-model="contato.nome"
              
              id="titulo"
            />
          </div>
          <div class="form-row">
            <label for="titulo">Email</label>
            <input
              type="text"
              class="form-control"
              v-model="contato.email"
              
              id="titulo"
            />
          </div>
            <div class="form-row">
            <label for="titulo">Telefone</label>
            <input
              type="text"
              class="form-control"
              v-model="contato.telefone"
              
              id="titulo"
            />
          </div>
          <div class="form-row">
            <label for="exampleFormControlTextarea1">Texto</label>
            <textarea
              class="form-control"
              v-model="contato.texto"
              id="texto"
              rows="5"
            ></textarea>
          </div>
          <br />
          <div class="form-row">
            <button class="btn btn-primary" @click="salvarcontato">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "NovoContatos",
  props: {
    msg: String,
  },
  data() {
    return {
      contato: {
        nome: "",
        email: "",
        telefone: "",
        texto: ""
      },
    };
  },
  methods: {
    salvarcontato: function () {
 
      axios
        .post("http://localhost:88/api/contatos", this.contato)
          .then((response) => {          
          if(response.status =='201')alert('contato Salvo com Sucesso');
          this.$router.push('/');

        })
        .catch((response) => {
          alert('Erro ao salvar contato  verificar log');
          console.log(response);
          
        });
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
 
</style>
