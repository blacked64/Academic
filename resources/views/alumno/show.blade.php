@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    {{ $alumno['nombre'] }}
                </h1>
            </div>
        </div>
        <div class="row">
          <div class="col-6">
          <ul>
            <li>
              <span>Nombre</span>: {{ $alumno['nombre'] }}
            </li>
            <li>
              <span>Apellidos</span>: {{ $alumno['apellidos'] }}
            </li>
            <li>
              <span>Cédula</span>: {{ $alumno['cedula'] }}
            </li>
            <li>
              <span>Dirección</span>: {{ $alumno['direccion'] }}
            </li>
            <li>
              <span>Telefonos</span>: {{ $alumno['telefonos'] }}
            </li>
          </ul>
          </div>
          <div class="col-6">
            <h2>Notas del Alumno</h2>
            <table>
              <thead>
                <th>
                  Materia
                </th>
                <th>
                  Profesor
                </th>
                <th>
                  Nota
                </th>
              </thead>
              <tbody>
                @if($alumno->notas->isNotEmpty())
                @foreach($alumno->notas as $nota)
                  <tr>
                    <td>
                      {{ $nota->materia->nombre_descriptivo }}
                    </td>
                    <td>
                      {{ $nota->profesor->nombre }} {{ $nota->profesor->apellidos }}
                    </td>
                    <td>
                      {{ $nota->nota }}
                    </td>
                  </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
@endsection
