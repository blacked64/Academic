@extends('layouts.app')

@section('title', 'Secretaria - Notas')

@section('content')
<div class="container-fluid justify-content-center">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif

<div class="col-12 content-title-search">
  <h1 class="col-8 left">
    <i class="fa faw fa-sticky-note"></i> Boletines de {{ $notas[0]->alumno->nombre }}
  </h1>
</div>
<table class="table table-content">
  <thead class="table-header">
    <th>
      boletín
    </th>
    <th>
      ultima vez actualizado
    </th>
  </thead>
  <tbody class="table-body">
    @foreach($notas as $nota)
    <tr>
      <td>
          <form method="post" action="{{ route('boletin.show') }}">
            @csrf
            <input type="hidden" name="boletin_id" value="{{ $nota->id }}">
            <button class="btn-sm btn-create"><i class="fas fa-search"></i></button>
          </form>
      </td>
      <td>
        {{ $nota->updated_at->format('d/m/Y') }}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('boletin.index') }}" class="btn btn-create">Volver</a>
</div>
@endsection