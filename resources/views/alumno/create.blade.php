@extends('layouts.default')

@section('title', 'Secretaria - Alumnos - Crear')

@section('content')
<h2 class="text-title">Creación</h2>
<div class="content-show">
  <form action="{{ route('alumnos.store') }}" method="post">
    @csrf
    @include('alumno.form')
    <button class="btn btn-create">
      Crear
    </button>
    <a href="{{ route('alumnos.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
