@extends('layouts.default')

@section('title', 'Secretaria - Secciones - Crear')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
@endpush

@section('content')
<h2 class="text-title">Creación de Boletín para {{ $alumno->nombre }}</h2>
<div class="content-show-boletin">
  <form action="{{ route('notas.store') }}" method="post">
    @csrf
    <input type="hidden" name="alumno_id" value="{{ $alumno->id }}">


    <h3>Primer Lapso</h3>
    @foreach($materias as $i => $materia)
    <div class="form-group row">
      <label for="inputPassword" class="col-6 col-form-label">Nota de {{ $materia->nombre }}</label>
      <div class="col-6">
        <input type="number" class="form-control" name="boletin[I][{{ $i }}][nota]" id="inputPassword" max="20">
        <input type="hidden" name="boletin[I][{{ $i }}][materia]" value="{{ $materia->nombre }}">
      </div>
    </div>
    @endforeach
    <h3>Segundo Lapso</h3>
    @foreach($materias as $i => $materia)
    <div class="form-group row">
      <label for="inputPassword" class="col-6 col-form-label">Nota de {{ $materia->nombre }}</label>
      <div class="col-6">
        <input type="number" class="form-control" name="boletin[II][{{ $i }}][nota]" id="inputPassword" max="20">
        <input type="hidden" name="boletin[II][{{ $i }}][materia]" value="{{ $materia->nombre }}">
      </div>
    </div>
    @endforeach
    <h3>Tercer Lapso</h3>
    @foreach($materias as $i => $materia)
    <div class="form-group row">
      <label for="inputPassword" class="col-6 col-form-label">Nota de {{ $materia->nombre }}</label>
      <div class="col-6">
        <input type="number" class="form-control" name="boletin[III][{{ $i }}][nota]" id="inputPassword" max="20">
        <input type="hidden" name="boletin[III][{{ $i }}][materia]" value="{{ $materia->nombre }}">
      </div>
    </div>
    @endforeach
      <div class="row justify-content-center">
        <button class="btn btn-create">
          Crear
        </button>
        <a href="{{ route('notas.create') }}" class="btn btn-create">Volver</a>
      </div>
  </form>
</div>
@endsection

@push('scripts')
  <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('js/i18n/defaults-es_ES.min.js') }}"></script>
@endpush
