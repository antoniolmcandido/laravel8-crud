@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Clientes</h1>
    <div>
    <a style="margin: 19px;" href="{{ route('cadastrar')}}" class="btn btn-primary">Novo Cliente</a>
    </div>     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Email</td>
          <td>Telefone</td>
          <td>Cidade</td>
          <td>Estado</td>
          <td colspan = 2>Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}} {{$cliente->sobrenome}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->cidade}}</td>
            <td>{{$cliente->estado}}</td>
            <td>
                <a href="{{ route('editar',$cliente->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('excluir',$cliente->id)}}" method="post">
                  @csrf                  
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div class="col-sm-12">
@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div>
@endif
</div>
@endsection