@extends('layouts.default')

@section('title', 'Secretaria - Alumnos')

@section('content')
<div class="container-fluid">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif

<div class="col-12 content-title-search">
  <h1 class="col-8 left">
    <i class="fa faw fa-graduation-cap"></i> alumnos disponibles
  </h1>
  <span class="col-4 right">
    <a href="{{ route('alumnos.create') }}" class="btn btn-create"><i class="fas fa-lg fa-plus"></i></a>
    <span class="form-group">
      <form action="{{ route('alumnos.index') }}" method="get">
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
    @foreach($alumnos as $alumno)
    <tr>
      <td>
        {{ $alumno->nombre }}
      </td>
      <td>
        @if($alumno->grado == 1)
          1 Año
        @elseif($alumno->grado == 2)
          2 Año
        @elseif($alumno->grado == 3)
          3 Año
        @elseif($alumno->grado == 4)
          4 Año
        @elseif($alumno->grado == 5)
          5 Año
        @endif
      </td>
      <td>
        {{ $alumno->cedula }}
      </td>
      <td class="table-roles">
        {{ $alumno->direccion }}
      </td>
      <td>
        {{ $alumno->telefonos }}
      </td>
      <td>
        {{ $alumno->updated_at }}
      </td>
      <td>
        <div class="btn-group-sm">
          <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-create"><i class="fas fa-sm fa-edit"></i></a>
          <form method="post" action="{{ route('alumnos.destroy', $alumno->id) }}">
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
  {{ $alumnos->appends(request()->query())->links('paginate.default') }} 
</div>

</div>
@endsection