@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar Novo Usuário</h1>
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
                  <h3 class="card-title">Novo Usuário</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome Completo</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Setor (Cadastro de setor)</label>
                      <input type="" class="form-control" id="exampleInputPassword1" placeholder="Setor">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">CPF</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o CPF">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Matrícula</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o CPF">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">E-mail</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o Telefone">
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Salvar</button>
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