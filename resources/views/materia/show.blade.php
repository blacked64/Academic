@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    {{ $materia['nombre_descriptivo'] }}
                </h1>
            </div>
        </div>
        <div class="row">
          <ul>
            <li>
              <span>Nombre Clave</span>: {{ $materia['nombre_clave'] }}
            </li>
            <li>
              <span>Nombre Descriptivo</span>: {{ $materia['nombre_descriptivo'] }}
            </li>
            <li>
              <span>Descripción</span>: {{ $materia['descripcion'] }}
            </li>
          </ul>
        </div>
    </div>
@endsection
