@extends('layouts.default')

@section('title', 'Secretaria - Materias - Crear')

@section('content')
<h2 class="text-title">Creación</h2>
<div class="content-show">
  <form action="{{ route('materias.store') }}" method="post">
    @csrf
    @include('materia.form')
    <button class="btn btn-create">
      Crear
    </button>
    <a href="{{ route('materias.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
