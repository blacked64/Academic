@extends('layouts.app')

@section('content')
<div class="container">
      <div class="card card-login mx-auto mt-5 login-body">
        <div class="card-header login-header">Iniciar Sesión</div>
        <div class="card-body">
          <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Correo Electrónico</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Contraseña</label>
              </div>
            </div>
            <button class="btn btn-block btn-login">
                Iniciar
            </button>
          </form>
          <a href="{{ route('boletin.index') }}" class="login-button">Mirar boletines</a>
        </div>
      </div>
    </div>
@endsection

