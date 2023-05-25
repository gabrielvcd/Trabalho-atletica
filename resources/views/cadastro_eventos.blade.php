<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Atletica Mamutes</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
  

  <link rel="stylesheet" href="./css/barra.css">
<link rel="stylesheet" href="./css/CAD-evento.css">

</head>

<body>

<div class="navbar">
    <div class="logo">
      <img src="./img/logo mamutes 1.PNG" width="100px" alt="Logo">
    </div>
    <a href="http://localhost:8000/home">Home</a>
    <a href="http://localhost:8000/eventos">Eventos</a>
    <a href="http://localhost:8000/sobre">Sobre Nós</a>
    <a href="http://localhost:8000/cadastro_time">Cadastro de time</a>
    <a href="http://localhost:8000/login">Login</a>
    <div class="dropdown">
      <a href="#">&#9776;</a>
      <div class="dropdown-content">
        <a href="http://localhost:8000/cadastro_eventos">Adicionar Eventos</a>
        <a href="http://localhost:8000/cadastro_membros">Atualizar Membros</a>
      </div>
    </div>
  </div>


  <div id="cad-eventos">
    <h1 class="titulo">Cadastro de Eventos</h1>
    <form method="POST" class="formulario" action="/events" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="evento">Nome do evento:</label>
        <input type="text" id="evento" name="evento" v-model="nome">
      </div>
  
      <div class="form-group">
        <label for="data">Data do evento:</label>
        <input type="date" id="data" name="data" v-model="data">
      </div>
  
      <div class="form-group">
        <label for="local">Local do evento:</label>
        <input type="text" id="local" name="local" v-model="local">
      </div>
  
      <div class="form-group">
        <label for="descricao">Descrição do evento:</label>
        <textarea id="descricao" name="descricao" v-model="descricao"></textarea>
      </div>
  
      <div class="form-group">
        <label for="imagem">Imagem do evento:</label>
        <input type="file" id="image" name="image" v-on:change="uploadImagem">
      </div>
      <input type="submit" value="Criar Evento">
      <!-- <button class="btn-cadastrar" v-on:click="cadastrarEvento">Cadastrar</button> -->
    </form>
  
    
  </div>
  


  <div class="conteudo-rodape">

    <ul>
      <li><a href=""><img src="./img/images.png" width="30px" alt=""></a></li>
      <li><a href=""><img src="./img/ista.png" width="30px" alt=""></a></li>
      <li><a href=""><img src="./img/email.png" width="30px" alt=""></a></li>
    </ul>


  </div>
  <div class="todos">
    <p> Todos os direitos foram reservados</p>

  </div>


  <script src="./js/nav.js"></script>
  <script src="./js/barra-de-navegação.js"></script>
  <script src="./js/cad-evento.js"></script>



</body>

</html>