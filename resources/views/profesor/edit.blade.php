@extends('layouts.default')

@section('title', 'Secretaria - Profesores - Editar')

@section('content')
<h2 class="text-title">Editar</h2>
<div class="content-show">
  <form action="{{ route('profesores.update', $profesor->id) }}" method="post">
    @csrf
    @method('PUT')
    @include('profesor.form')
    <button class="btn btn-create">
      Editar
    </button>
    <a href="{{ route('profesores.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
