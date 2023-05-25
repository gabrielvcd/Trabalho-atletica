<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Atletica Mamutes</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>

  <link rel="stylesheet" href="./css/barra.css">
  <link rel="stylesheet" href="./css/faca.css">



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

  <div id="cad">
    <h1>Cadastre o seu Time!</h1>
    <form action="/times" method="POST" class="cad">
      @csrf
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" v-model="nome">
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" v-model="email">
      </div>
      <div class="form-group">
        <label for="ra">RA:</label>
        <input type="text" id="ra" name="ra" class="ra" v-model="RA">
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
        <label for="curso">Curso:</label>
        <select id="curso" name="curso" v-model="curso">
          <option value="ADS">Análise e Desenvolvimento de Sistemas</option>
          <option value="PI">Produção Industrial</option>
          <option value="Agro">Agro Negócio</option>
          <option value="SI">Sistemas para Internet</option>
        </select>
      </div>
      <div class="form-group">
        <label for="jogo">Qual jogo quer participar?</label>
        <input type="text" name="jogo" id="jogo" v-model="jogo">
      </div>
      <div class="form-group">
        <label for="equipe">Qual o nome do time?</label>
        <input type="text" name="equipe" id="equipe" v-model="equipe">
      </div>
      <input type="submit" value="Cadastrar">
      <!-- <button class="btn" @click.prevent="cadastrar()">Cadastrar</button> -->
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
  <script src="faca.js"></script>


</body>

</html>