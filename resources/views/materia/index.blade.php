@extends('layouts.default')

@section('title', 'Secretaria - Materias')

@section('content')
<div class="container-fluid">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif

<div class="col-12 content-title-search">
  <h1 class="col-8 left">
    <i class="fa faw fa-brain"></i> materias
  </h1>
  <span class="col-4 right">
    <a href="{{ route('materias.create') }}" class="btn btn-create"><i class="fas fa-lg fa-plus"></i></a>
    <span class="form-group">
      <form action="{{ route('materias.index') }}" method="get">
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
      grado
    </th>
    <th>
      ultima vez actualizado
    </th>
    <th>
      acciones
    </th>
  </thead>
  <tbody class="table-body">
    @foreach($materias as $materia)
    <tr>
      <td>
        {{ $materia->nombre }}
      </td>
      <td>
        @if($materia->grado == 1)
          1 Año
        @elseif($materia->grado == 2)
          2 Año
        @elseif($materia->grado == 3)
          3 Año
        @elseif($materia->grado == 4)
          4 Año
        @elseif($materia->grado == 5)
          5 Año
        @endif
      </td>
      <td>
        {{ $materia->updated_at->format('d/m/Y') }}
      </td>
      <td>
        <div class="btn-group-sm">
          <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-create"><i class="fas fa-sm fa-edit"></i></a>
          <form method="post" action="{{ route('materias.destroy', $materia->id) }}">
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
    {{ $materias->appends(request()->query())->links('paginate.default') }}   
  </div>
</div>
@endsection