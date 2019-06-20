@extends('layouts.default')

@section('title', 'Crear')

@section('content')
<h2 class="text-title">Creación</h2>
<div class="content-show">
  <form action="{{ route('admin.store') }}" method="post">
    @csrf
    @include('admin.form')
    <button class="btn btn-create">
      Crear
    </button>
    <a href="{{ route('admin.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
