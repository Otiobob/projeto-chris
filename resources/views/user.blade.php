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
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>183</td>
                <td>Christoffer</td>
                <td>STI</td>
                <td>899.896.852-26</td>
                <td>452152</td>
              </tr>              
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