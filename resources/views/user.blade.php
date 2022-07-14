@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuários Cadastrados</h1>
@stop

@section('content')   
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Expandable Table</h3>
        </div>
        <!-- ./card-header -->
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Setor</th>
                <th>CPF</th>
                <th>Matrícula</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>STI - ARRUMAR</td>
                  <td>{{ $user->cpf }}</td>
                  <td>{{ $user->matricula }}</td>
                  <td>
                    <a href="{{ route('users.edit', $user) }}" class="fas fa-edit" ></a>
                  </td>
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