@extends('modelo')

@section('conteudo')

<div class="container">
<div class="row" style="margin-top: 10px">
  <div class="col-sm-11">
    <h2> cadastro de clientes </h2>
  </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>CPF</th>
        <th>RG</th>
        <th>Data de nascimento</th>
        <th>Endereço</th>
        <th>E-mail</th>
        <th>Número do cartão</th>
        <th>Senha</th>
      <tr>
    </thead>
    <tbody>
      @foreach ($clientes as $c)
       <tr>
         <td>{{$c->nome}}</td>
         <td>{{$c->sobrenome}}</td>
         <td>{{$c->cpf}}</td>
         <td>{{$c->rg}}</td>
         <td>{{$c->dataNascimento}}</td>
         <td>{{$c->endereco}}</td>
         <td>{{$c->email}}</td>
         <td>{{$c->numeroCartao}}</td>
         <td>{{$c->senha}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection