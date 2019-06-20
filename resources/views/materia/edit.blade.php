@extends('layouts.default')

@section('title', 'Secretaria - Materias - Editar')

@section('content')
<h2 class="text-title">Creación</h2>
<div class="content-show">
  <form action="{{ route('materias.update', $materia->id) }}" method="post">
    @csrf
    @method('PUT')
    @include('materia.form')
    <button class="btn btn-create">
      Editar
    </button>
    <a href="{{ route('materias.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
