<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Atletica Mamutes</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>


  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="/css/barra.css">


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
  <div class="val"> <div class="val2" > @if (session()->has('success'))
    {{ session()->get('success') }}
    @endif
</div>
    @if (session()->has('success'))
    <a href="{{ route('destroyy') }}">Logout</a>
    @endif

    @if (auth()->check())


    @endif</div>



  <div id="baner">
    <img v-for="image in images" :src="image" / width="100%">
  </div>

  <div class="eventos">
    <h1>Eventos</h1>


    <div id="apps">
      <img v-for="image in images" :src="image"  width="300px"/>

    </div>


    </div>

  </div>


  <<div class="sobre">

  <table>
    <thead>
      <tr>
        <th>Nome do time</th>
        <th>Turno</th>
        <th>Curso</th>
        <th>Esporte</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($informacoes as $informacao)
      <tr>
        <td>{{$informacao->nome_time}}</td>
        <td>{{$informacao->turno}}</td>
        <td>{{$informacao->curso}}</td>
        <td>{{$informacao->esporte}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="saiba"> <ul><a href="http://localhost:8000/eventos" >saiba mais!</a> </ul>
</div>

<style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid black;
  }

  th {
    background-color: #333;
    color: white;
  }

  a {
    display: block;
    text-align: center;
    margin-top: 20px;
  }
</style>


<style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 60px;
    margin-bottom: 20px;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid black;
  }

  th {
    background-color: #333;
    color: white;
  }

  a {
    display: block;
    text-align: center;
    margin-top: 20px;
  }
</style>

      </tbody>
    </table>

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



</body>

</html>
