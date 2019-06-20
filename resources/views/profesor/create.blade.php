@extends('layouts.default')

@section('title', 'Secretaria - Profesores - Crear')

@section('content')
<h2 class="text-title">Creación</h2>
<div class="content-show">
  <form action="{{ route('profesores.store') }}" method="post">
    @csrf
    @include('profesor.form')
    <button class="btn btn-create">
      Crear
    </button>
    <a href="{{ route('profesores.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
