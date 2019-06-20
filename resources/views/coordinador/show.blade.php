@extends('layouts.default')

@section('content')
  <div class="container">
    <ul>
      <li>
        {{ $user->name }}
      </li>
      <li>
        {{ $user->email }}
      </li>
      <li>
        {{ $user->roles()->get()->pluck('nombre_descriptivo')->implode(', ') }}
      </li>
    </ul>
      <a href="{{ route('coordination.index') }}" class="btn btn-primary">
        Volver al home
      </a>
  </div>
@endsection
