@extends('adminlte::page')

@section('title', 'Dashboard')
  

@section('content_header')
    <h1>Calendário</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="sticky-top mb-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Status</h4>
              </div>
              <div class="card-body">
                <!-- the events -->
                  <div id="calendar">
                    
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        
  </section>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({

            })
        });
    </script>
    
@stop