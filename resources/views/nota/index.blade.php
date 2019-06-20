@extends('layouts.default')

@section('title', 'Secretaria - Notas')

@section('content')
<div class="container-fluid">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif

<div class="col-12 content-title-search">
  <h1 class="col-8 left">
    <i class="fa faw fa-sticky-note"></i> notas
  </h1>
  <span class="col-4 right">
    <a href="{{ route('notas.create') }}" class="btn btn-create"><i class="fas fa-lg fa-plus"></i></a>
    <span class="form-group">
      <form action="{{ route('notas.index') }}" method="get">
        <input type="text" name="admin" placeholder="Buscar por cédula sin guiones o espacios..." class="search-input">
        <button class="btn btn-create">Enviar</button>
      </form>
    </span>
  </span>
</div>

<table class="table table-content">
  <thead class="table-header">
    <th>
      alumno
    </th>
    <th>
      cédula
    </th>
    <th>
      boletín
    </th>
    <th>
      ultima vez actualizado
    </th>
    <th>
      acciones
    </th>
  </thead>
  <tbody class="table-body">
    @foreach($notas as $nota)
    <tr>
      <td>
        {{ $nota->alumno->nombre }}
      </td>
      <td>
        {{ $nota->alumno->cedula }}
      </td>
      <td>
          <form method="post" action="{{ route('boletin.show') }}">
            @csrf
            <input type="hidden" name="cedula" value="{{ $nota->alumno->cedula }}">
            <button class="btn-sm btn-create"><i class="fas fa-search"></i></button>
          </form>
      </td>
      <td>
        {{ $nota->updated_at }}
      </td>
      <td>
        <div class="btn-group-sm">
          <form method="post" action="{{ route('notas.destroy', $nota->id) }}">
            @method('DELETE')
            @csrf
            <button class="btn-sm btn-create"><i class="fas fa-sm fa-trash"></i></button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>  
  <div class="row justify-content-center">
    {{ $notas->appends(request()->query())->links('paginate.default') }} 
  </div>
</div>
@endsection