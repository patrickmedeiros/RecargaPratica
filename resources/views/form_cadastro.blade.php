@extends('modelo')

@section('conteudo')

<h5>Para realizar sua recarga web, preencha os seguintes dados:</h5>   
<div>
    <div class="col-sm-4">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required 
                placeholder="Digite seu nome"
                 class="form-control">
        </div>
    </div>
</div>
<div>   
    <div class="col-sm-4">
        <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required 
                placeholder="Digite seu sobrenome"
                   class="form-control">
        </div>
    </div>
</div>
<div>
    <div class="col-sm-4">
        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" required 
                placeholder="XXX.XXX.XXX-XX"
                 class="form-control">
        </div>
    </div>
</div>
<div>   
    <div class="col-sm-4">
        <div class="form-group">
            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" required 
            placeholder="XXXXXXXXXX"
                   class="form-control">
        </div>
    </div>
</div>
<div>
    <div class="col-sm-4">
        <div class="form-group">
          <label for="dataNascimento">Data de nascimento:</label>
          <input type="text" id="dataNascimento" name="dataNascimento" required 
                placeholder="XX/XX/XXXX"
                 class="form-control">
        </div>
    </div>
</div>
<div>   
    <div class="col-sm-4">
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required 
            placeholder="Digite seu endereço completo"
                   class="form-control">
        </div>
    </div>
</div>
<div>
    <div class="col-sm-4">
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="text" id="email" name="email" required 
                placeholder="Digite seu e-mail"
                 class="form-control">
        </div>
    </div>
</div>
<div>   
    <div class="col-sm-4">
        <div class="form-group">
            <label for="numeroCartao">Número do cartão:</label>
            <input type="text" id="numeroCartao" name="numeroCartao" required 
                placeholder="Digite seu nome"
                   class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="text" id="senha" name="senha" required 
                 class="form-control">
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="confirmaSenha">Confirme sua senha:</label>
            <input type="text" id="confirmaSenha" name="confirmaSenha" required 
                   class="form-control">
        </div>
    </div>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="termosUso">Eu li e aceito os <a href="">termos de uso</a>
  </label>
</div>
<div>
   <a href="##" class="btn btn-primary pull-right" role="button">Enviar</a>
</div>

@endsection