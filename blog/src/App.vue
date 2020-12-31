<template>
  <div id="app">
  
    <div class="container">
      <header class="blog-header py-3">
        <div
          class="row flex-nowrap justify-content-between align-items-center"
        ></div>
      </header>
      
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify">
           <router-link to="/" class="p-2 link-secondary">Home</router-link>
           <router-link to="/NovoPost" class="p-2 link-secondary">Novo Post</router-link>
            <router-link to="/NovoContato" class="p-2 link-secondary">Contatos</router-link>
             <router-link to="/Mensagens" class="p-2 link-secondary">Mensagens</router-link>
          
        </nav>
      </div>
      <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">
            TOPO DO BLOG
          </h1>
          <p class="lead my-3">
            Multiple lines of text that form the lede, informing new readers
            quickly and efficiently about what’s most interesting in this post’s
            contents.
          </p>
          <p class="lead mb-0">
            <a href="#" class="text-white fw-bold">Continue reading...</a>
          </p>
        </div>
      </div>
    </div>
    <router-view/>
    <footer class="blog-footer">
      <p>
        Blog template built for
        <a href="https://getbootstrap.com/">Bootstrap</a> by
        <a href="https://twitter.com/mdo">@mdo</a>.
      </p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  </div>

  
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
