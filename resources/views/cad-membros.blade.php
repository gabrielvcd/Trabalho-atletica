<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Atletica Mamutes</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
  

  <link rel="stylesheet" href="./css/barra.css">
  <link rel="stylesheet" href="./css/cad-membros.css">

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
    <h1 class="titulo">Cadastro de membros</h1>
    <form method="POST" action="/members" class="formulario">
    @csrf
      <div class="form-group">
        <label for="membro">Nome:</label>
        <input type="text" id="nome" name="nome" v-model="nome">
      </div>

      <div class="form-group">
        <label for="curso">Curso:</label>
        <select id="curso" name="curso" v-model="curso">
          <option value="ADS">Análise e Desenvolvimento de Sistemas</option>
          <option value="PI">Produção Industrial</option>
          <option value="Agro">Agro Negócio</option>
          <option value="SI">Sistemas para Internet</option>
        </select>
      </div>

      <div class="form-group">
        <label for="turno">Turno:</label>
        <select id="turno" name="turno" v-model="turno">
          <option value="Noite">Noite</option>
          <option value="Tarde">Tarde</option>
          <option value="Manha">Manhã</option>
        </select>
      </div>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" >
      </div>

      <input type="submit" value="Encaminhar Solicitação">
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