<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Atletica Mamutes</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>


  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/barra.css">



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
    <h1>É bom ter você de volta, Mamute!</h1>
    @error('error')
    <span>{{ $message }}</span>
    @enderror
    <form method="POST" action="{{ route('login') }}" class="cad">
      @csrf
        <label>E-mail:</label>
      <input type="email" class="form-control" name="email">
      <br>
      <label>Senha:</label>
      <input type="password" class="form-control" name="password">
      <br>


      <button type="submit">Login</button>
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
