@extends('layouts.default')

@section('title', 'Secretaria - Alumnos - Editar')

@section('content')
<h2 class="text-title">Editar</h2>
<div class="content-show">
  <form action="{{ route('alumnos.update', $alumno->id) }}" method="post">
    @csrf
    @method('PUT')
    @include('alumno.form')
    <button class="btn btn-create">
      Editar
    </button>
    <a href="{{ route('alumnos.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
