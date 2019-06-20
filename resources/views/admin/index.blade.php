@extends('layouts.default')

@section('title', 'Administración - Panel Principal')

@section('content')
<div class="container-fluid">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif

<div class="col-12 content-title-search">
  <h1 class="col-8 left">
    <i class="fa faw fa-landmark"></i> funcionarios disponibles
  </h1>
  <span class="col-4 right">
    <a href="{{ route('admin.create') }}" class="btn btn-create"><i class="fas fa-lg fa-plus"></i></a>
    <span class="form-group">
      <form action="{{ route('admin.index') }}" method="get">
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
      correo electrónico
    </th>
    <th>
      Niveles
    </th>
    <th>
      ultima vez actualizado
    </th>
    <th>
      acciones
    </th>
  </thead>
  <tbody class="table-body">
    @foreach($admins as $user)
    <tr>
      <td>
        {{ $user->name }}
      </td>
      <td>
        {{ $user->email }}
      </td>
      <td class="table-roles">
        {{ $user->roles->pluck('nombre_descriptivo')->implode(', ') }}
      </td>
      <td>
        {{ $user->updated_at }}
      </td>
      <td>
        <div class="btn-group-sm">
          <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-create"><i class="fas fa-sm fa-edit"></i></a>
          <form method="post" action="{{ route('admin.destroy', $user->id) }}">
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
    {{ $admins->appends(request()->query())->links('paginate.default') }} 
  </div>
</div>
@endsection