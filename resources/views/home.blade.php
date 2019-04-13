@extends('modelo')

@section('conteudo')

<div id="carrouselSite" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carrouselSite" data-slide-to="0" class="active"></li>
    <li data-target="#carrouselSite" data-slide-to="1"></li>
    <li data-target="#carrouselSite" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="/imagens/pratica.png" alt="Imagem 1" width="1100" height="500">
      <!-- Caso queira colocar algum comentário na imagem que aparece no carrousel
        <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>-->   
    </div>
    <div class="carousel-item">
      <img src="/imagens/pratica2.jpg" alt="Imagem 2" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="/imagens/pratica3.png" alt="Imagem 3" width="1100" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carrouselSite" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hiden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carrouselSite" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div class="container-fluid" align="center">
  <h4>Não fique sem créditos, escolha seu cartão e recarregue agora!</h4>
</div>

<div id="divCartoes"class="container-fluid" align="center">
  <a href="http://localhost:8000/cadastro"><img src="/imagens/Acompanhante.png" atl="acompanhante" width="400" height="250"></a>
  <a href=""><img src="/imagens/Cidadão.png" atl="cidadao" width="400" height="250"></a>
  <a href=""><img src="/imagens/Empresarial.png" atl="empresarial" width="400" height="250"></a>
</div>

  <div class="container-fluid" align="center">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.094002182206!2d-52.34211668484321!3d-31.767921981288453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511b5bd7da7d415%3A0x4e5cf571aa6e214a!2sR.+Padre+Anchieta%2C+2009+-+Centro%2C+Pelotas+-+RS%2C+96015-300!5e0!3m2!1spt-BR!2sbr!4v1555083975600!5m2!1spt-BR!2sbr" width="1300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div align="center">
    <footer>Copyright 2019 Recarga Prática Ltda. Todos os direitos reservados.</footer>
  </div>

@endsection