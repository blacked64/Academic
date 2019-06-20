@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    {{ $profesor['nombre'] }}
                </h1>
            </div>
        </div>
        <div class="row">
          <ul>
            <li>
              <span>Nombre</span>: {{ $profesor['nombre'] }}
            </li>
            <li>
              <span>Apellidos</span>: {{ $profesor['apellidos'] }}
            </li>
            <li>
              <span>Cédula</span>: {{ $profesor['cedula'] }}
            </li>
            <li>
              <span>Dirección</span>: {{ $profesor['direccion'] }}
            </li>
            <li>
              <span>Telefonos</span>: {{ $profesor['telefonos'] }}
            </li>
            <li>
              <span>Materias</span>:
              <ul>
                @foreach($profesor->materias as $materia)
                  <li>
                    {{ $materia->nombre_descriptivo }}
                  </li>
                @endforeach                
              </ul>
            </li>
          </ul>
        </div>
    </div>
@endsection
