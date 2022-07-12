@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar Novo Setor</h1>
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
                  <h3 class="card-title">Novo Setor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nome</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Secretaria Adjunta</label>
                      <input type="" class="form-control" id="exampleInputPassword1" placeholder="SECRETARIA">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alguma INFORMAÇÃO</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o ALGUMA COISA">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alguma OUTRA INFORMAÇÃO</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite ALGUMA OUTRA COISA">
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                  <!-- /.card-body -->
  
                  
              
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop