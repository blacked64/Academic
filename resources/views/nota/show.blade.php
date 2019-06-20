@extends('layouts.default')

@section('content')
<h1 class="text-title">
 Elección
</h1>

    <div class="content-show">
        <div class="row">
            <div class="col-12">
              {{--  
                <div class="form-group">
                  <label>Seleccione al alumno</label>
                  <select class="form-control" name="alumno_id">
                    @foreach($alumnos as $alumno)
                      <option value="{{ $alumno['id'] }}">
                        {{ $alumno['nombre'] }} {{ $alumno['apellidos'] }} | {{ $alumno['cedula'] }}
                      </option>
                    @endforeach
                  </select>
                </div>
                <button class="btn btn-create">
                  Continuar
                </button>
              --}}
                  <alumno-list
                  route="{{ route('notas.alumnos') }}"
                  :labels="{{ json_encode([
                    'cedula' => __("Cédula"),
                    'nombre' => __("Nombre"),
                    'grado' => __("Grado"),
                    'select' => __("Seleccione"),
                    'selected' => __("Seleccionar"),
                    'seccion' => __("Sección")
                  ]) }}"
                  route_post="{{ route('notas.crear') }}"
                  token="{{ csrf_token() }}"
                  >
                  </alumno-list>
            </div>
        </div>
    </div>

@endsection
