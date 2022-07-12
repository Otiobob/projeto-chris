@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


<h1>Calendário</h1>
@stop

@section('content')
<section class="content">
    <div class="container">
      <div id="agenda"></div>
    
    </div>       
        
  </section>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
    <script src="{{asset('js/agenda.js')}}" defer></script>
   
@stop