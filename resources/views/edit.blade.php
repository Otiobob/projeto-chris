@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Usuário</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card ">
                <div class="card-header">
                  <h3 class="card-title">Editar Usuário</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{-- {{dd($user)}} --}}
                <form action="{{ route('users.update', $user) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Nome Completo</label>
                      <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                      <label>Setor</label>
                      <select class="form-control">
                        <option></option>
                        <option>Opção vinda do banco</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cpf">CPF</label>
                      <input type="text" value="{{$user->cpf}}" class="form-control" id="cpf" name="cpf" required placeholder="Digite o CPF">
                  </div>
                  <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" value="{{$user->matricula}}" class="form-control" id="matricula" name="matricula" placeholder="Digite o CPF">
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email" placeholder="Digite o Email">
              </div>
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" value="{{$user->telefone}}" class="form-control" id="telefone" name="telefone" placeholder="Digite o Telefone">
            </div>
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="text"  class="form-control" id="password" name="password" placeholder="Digite a senha">
          </div>
            <div>
              <button type="submit" class="btn btn-primary">Salvar Alteração</button>
            </div>
          </form>
        </div>
                  <!-- /.card-body -->
  
                  
              
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop