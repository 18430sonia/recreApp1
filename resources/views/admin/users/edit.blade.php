@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Persona</h1> <br>



<form method="POST" action="{{route('admin.users.update', $user)}}"  class="needs-validation" novalidate>

   @method('PUT')
   @csrf

  <!-- <input type="hidden" name="_method" value="PUT"> --->
  <!--- <input type="hidden" name="_token" value=""-->

 <div class="container justify-content-center">
    <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">

            <label  class="form-label" for="text">Nombre</label>
            <input id="name" name="name" placeholder="Nombre" type="text" required class="form-control" value="{{$user->name}}">

        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label  class="form-label" for="text">apellido</label>
            <input id="apellido" name="apellido" placeholder="apellido" type="text" required class="form-control" value="{{$user->apellido}}">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
             <label  class="form-label" for="text">Tipo Documento</label>
                            <input id="tipo_documento" name="tipo_documento" placeholder="tipo Documento" type="text" required class="form-control" value="{{$user->tipo_documento}}">
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label  class="form-label" for="text">Numero Documento</label>
            <input id="numero_documento" name="numero_documento" placeholder="Numero de Documento" type="int" required class="form-control" value="{{$user->numero_documento}}">
        </div>

    </div>


    <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
             <label  class="form-label" for="text">Fecha de Nacimiento</label>
             <input id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" type="int" required class="form-control" value="{{$user->fecha_nacimiento}}">
        </div>

   <div class="form-group col-sm-12 col-md-6 col-lg-6">
                 <label  class="form-label" for="text">Telefono</label>
                 <input id="telefono" name="telefono" placeholder="" type="int" required class="form-control" value="{{$user->telefono}}">
            </div>
     </div>

    <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <label  class="form-label" for="text">Genero</label>
                 <input id="genero" name="genero" placeholder="" type="int" required class="form-control" value="{{$user->genero}}">
            </div>
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label  class="form-label" for="text">Correo Electronico</label>
                <input id="correo" name="correo" placeholder="" type="int" required class="form-control" value="{{$user->email}}">
           </div>
    </div>

    <br>

<div class="d-flex justify-content-center">
            <button wire:click="store"  class=" btn btn-primary">Actualizar Usuario</button>
        </div>

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
