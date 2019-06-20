@extends('layouts.default')

@section('title', 'Crear')

@section('content')
<h2 class="text-title">Creación</h2>
<div class="content-show">
  <form action="{{ route('coordination.store') }}" method="post">
    @csrf
    @include('coordinador.form')
    <button class="btn btn-create">
      Crear
    </button>
    <a href="{{ route('coordination.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
