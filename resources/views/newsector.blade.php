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
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('newsector.store') }}" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Nome do Setor</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                      <label for="secretaria">Secretaria Adjunta</label>
                      <input type="text" class="form-control" id="secretaria" name="sec_adjunta" placeholder="Secretaria">
                    </div>
                    <div class="form-group">
                      <label for="superintendente">Superintendente</label>
                      <input type="text" class="form-control" id="superintendente" name="superintendente" placeholder="Superintendente">
                  </div>
                <div>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div><br>
                <h3>Setores Cadastrados</h3>
                  <!-- /.card-body -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          
                        </div>
                        <!-- ./card-header -->
                       
                        <div class="card-body">
                          <table class="table table-bordered table-hover">
                            {{-- <h3>Setores Cadastrados</h3> --}}
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nome do Setor</th>
                                <th>Secretária Adjunta</th>
                                <th>Superintendente</th>
                              </tr>
                            </thead>
                            <tbody>
                                  @foreach ($sectors as $sector)
                                <tr>
                                  <td>{{ $sector->id }}</td>
                                  <td>{{ $sector->name }}</td>
                                  <td>{{ $sector->sec_adjunta }}</td>
                                  <td>{{ $sector->superintendente }}</td>
                              </tr>         
                              @endforeach 
                            </tbody>
                          </table>
                        </div>
  
                  
              
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop