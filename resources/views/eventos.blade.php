<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Atletica Mamutes</title>
    <!-- --> <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
   
    <link rel="stylesheet" href="./css/Evento.css">
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

    
      <div id="baner">
        <img v-for="image in images" :src="image" / width="100%">
      </div> 
  

<div class="sobre">
<img src="./img/logo mamutes 1.PNG" width="300px" alt="">
<p>  Posso ter defeitos, viver ansioso e ficar irritado algumas vezes, <br>
  mas não esqueço  que minha vida é a maior empresa do mundo. E que posso evitar que ela vá à falência.
  Ser feliz é reconhecer que vale a pena viver, apesar de todos os desafios, incompreensões e períodos de crise.
  Ser feliz é deixar de ser vítima dos problemas e se tornar autor <br>da própria história.
  É atravessar desertos fora de si, mas ser capaz de encontrar um oásis no recôndito da sua alma.
  É agradecer a Deus a cada manhã pelo milagre da vida.<br>
  Ser feliz é não ter medo dos próprios sentimentos. É saber falar de si mesmo. 
  É ter coragem para ouvir um “não”. É ter segurança para receber uma crítica, mesmo que injusta.</p>

</div>

<div class="eventos">
  <h1>Eventos</h1>
<div id="apps">

    <img v-for="image in images" :src="image"  />
    
  </div>
  
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
  

 <script src="./js/Evento.js"></script>
 <script src="./js/barra-de-navegação.js"></script>
    
    
</body>
</html>
