@extends('layouts.default')

@section('title', 'Secretaria - Profesores')

@section('content')
<div class="container-fluid">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif

<div class="col-12 content-title-search">
  <h1 class="col-8 left">
    <i class="fa faw fa-chalkboard"></i> profesores disponibles
  </h1>
  <span class="col-4 right">
    <a href="{{ route('profesores.create') }}" class="btn btn-create"><i class="fas fa-lg fa-plus"></i></a>
    <span class="form-group">
      <form action="{{ route('profesores.index') }}" method="get">
        <input type="text" name="admin" placeholder="Buscar..." class="search-input">
        <button class="btn btn-create">Enviar</button>
      </form>
    </span>
  </span>
</div>

<table class="table table-content">
  <thead class="table-header">
    <th>
      nombre
    </th>
    <th>
      cedula
    </th>
    <th>
      dirección
    </th>
    <th>
      telefono
    </th>
    <th>
      ultima vez actualizado
    </th>
    <th>
      acciones
    </th>
  </thead>
  <tbody class="table-body">
    @foreach($profesores as $profesor)
    <tr>
      <td>
        {{ $profesor->nombre }}
      </td>
      <td>
        {{ $profesor->cedula }}
      </td>
      <td>
        {{ $profesor->direccion }}
      </td>
      <td>
        {{ $profesor->telefonos }}
      </td>
      <td>
        {{ $profesor->updated_at }}
      </td>
      <td>
        <div class="btn-group-sm">
          <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn btn-create"><i class="fas fa-sm fa-edit"></i></a>
          <form method="post" action="{{ route('profesores.destroy', $profesor->id) }}">
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
    {{ $profesores->appends(request()->query())->links('paginate.default') }} 
  </div>
</div>
@endsection