<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Recarga Prática</title>
  <link href="/imagens/logocartao.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="/imagens/logocartao.png" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Compra Web
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Login</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Informações
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Cartão Escolar</a>
        <a class="dropdown-item" href="#">Cartão Cidadão</a>
        <a class="dropdown-item" href="#">Cartão Vale-Transporte</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Serviços      
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Horários e Itnerários</a>
        <a class="dropdown-item" href="#">Integrações</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Contato
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Localização</a>
        <a class="dropdown-item" href="#">Download App</a>
        <a class="dropdown-item" href="#">Trabalhe Conosco</a>
      </div>
    </li>
  </ul>
</nav>

<div id="carrouselSite" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="/imagens/pratica.png" alt="Los Angeles" width="1100" height="500">
      <!-- Caso queira colocar algum comentário na imagem que aparece no carrousel
        <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>-->   
    </div>
    <div class="carousel-item">
      <img src="/imagens/pratica2.jpg" alt="Chicago" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="/imagens/pratica3.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container-fluid">
  <h4><center>Não fique sem créditos, escolha seu cartão e recarregue agora!</center></h4>
</div>

</body>
</html>