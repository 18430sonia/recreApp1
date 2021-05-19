@extends('adminlte::page')

@section('title', 'RecreAdultos')

@section('content_header')
    <h1>Gestionar Actividad</h1>
@stop

@section('content')
  {{-- traigo el componente de livewire --}}
 @livewire('activ.activ-listar')
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
    {{-- //sweeet alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script> console.log('Hi!'); </script>
@stop
