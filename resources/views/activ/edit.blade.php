@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1 class="text-center">Actualizar Actividad</h1> <br>


    <form method="POST" action="{{route('Activ.update', $actividades)}}"  class="needs-validation" novalidate>
        @method('PUT')
        @csrf

        <div class="container justify-content-center">
            <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-6">

                    <label  class="form-label" for="text">Nombre Actividad</label>
                    <input id="nombactividad" name="name" placeholder="Nombre" type="text" required class="form-control" value="{{$actividades->nombactividad}}">

                </div>

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Fecha Inicio</label>
                    <input id="Fecha Inicio" name="Fecha Inicio" placeholder="Fecha Inicio" type="text" required class="form-control" value="{{$actividades->fecha_inicio}}">
                </div>

            </div>

            <div class="row">

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                     <label  class="form-label" for="text">Fecha Cierre</label>
                     <input id="Fecha Cierre" name="Fecha Cierre" placeholder="Fecha Cierre" type="text" required class="form-control" value="{{$actividades->fecha_cierre}}">
                </div>

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Hora Inicio</label>
                    <input id="Hora Inicio" name="Hora Inicio" placeholder="Hora Inicio" type="int" required class="form-control" value="{{$actividades->hora_inicio}}">
                </div>

            </div>



            <div class="row">

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                     <label  class="form-label" for="text">Hora Finalizacion</label>
                     <input id="Hora Finalizacion" name="Hora Finalizacion" placeholder="Hora Finalizacion" type="text" required class="form-control" value="{{$actividades->hora_finalizacion}}">
                </div>

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Entidad Responsable</label>
                    <input id="Entidad responsable" name="Hora Inicio" placeholder="Hora Inicio" type="int" required class="form-control" value="{{$actividades->ent_responsable}}">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label  class="form-label" for="text">Imagen</label>
                         <input id="imagen" name="imagen" placeholder="" type="int" required class="form-control" value="{{$actividades->imagen}}">
                    </div>

            </div>

            <br>

            <div class="d-flex justify-content-center">
                        <button wire:click="store"  class=" btn btn-primary">Actualizar Actividad</button>
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
