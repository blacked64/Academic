@extends('layouts.app')

@section('content')
<div class="container">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif
      <div class="card card-login mx-auto mt-5 login-body">
        <div class="card-header login-header">Coloque la cédula del alumno</div>
        <div class="card-body">
          <form method="post" action="{{ route('boletin.show') }}">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="number" id="inputEmail" name="cedula" class="form-control" placeholder="Cedula de identidad..." required="required" autofocus="autofocus">
                <label for="inputEmail">Ej: V-0000...</label>
              </div>
            </div>
            <button class="btn btn-block btn-login">
                Verificar boletín
            </button>
          </form>
          <a href="{{ route('home') }}" class="login-button">Volver</a>
        </div>
      </div>
    </div>
@endsection

