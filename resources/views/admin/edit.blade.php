@extends('layouts.default')

@section('title', 'Editar - '. $user->name)

@section('content')
<h2 class="text-title">Editar</h2>
<div class="content-show">
  <form action="{{ route('admin.update', $user->id) }}" method="post">
    @csrf
    @method('PUT')
    @include('admin.form')
    <button class="btn btn-create">
      Editar
    </button>
    <a href="{{ route('admin.index') }}" class="btn btn-create">Volver</a>
  </form>
</div>
@endsection
