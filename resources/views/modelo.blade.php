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

@yield('conteudo')

</body>
</html>