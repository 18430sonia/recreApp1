@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Lugar</h1> <br>

    <form method="POST" action="{{route('lugares.index', $lugares)}}"  class="needs-validation" novalidate>

        @method('POST') 
        @csrf
     


    <div class="container justify-content-center">
        <div class="row">
            <div class="col-8">
    
                <label  class="form-label" for="text">Nombre lugar</label>
                <input id="Nombre Lugar" name="name" placeholder="Nombre" type="text" required class="form-control" value="{{$lugares->nombre_lugar}}">
    
            </div>


            <div class="col-8">
    
                <label  class="form-label" for="text">Longitud</label>
                <input id="longitud" name="name" placeholder="longitud" type="text" required class="form-control" value="{{$lugares->longitud}}">
    
            </div>

            <div class="col-8">
    
                <label  class="form-label" for="text">Latitud</label>
                <input id="latitud" name="name" placeholder="lantitud" type="text" required class="form-control" value="{{$lugares->latitud}}">
    
            </div>


            <br>
              <div class="container justify-content-center">
               <div class="col-6">

                <br>

                   <input type="submit"  value="Actualizar" class="btn btn-info btn-block">
                        <a href="{{ route('lugares.index') }}" </a>
              
               </div>
          </div>




@stop


@section('content')
  {{-- traigo el componente de livewire --}}

@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
@stop
