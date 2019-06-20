@extends('layouts.default')

@section('content')
<div class="container">
  @if(Session::has('flash'))
    <h5 class="info-msg">{{Session::get('flash')}}</h5>
  @endif
		<div class="jumbotron">
			<h1 class="display-3">¡Hola {{ auth()->user()->name }}!</h1>
			<p class="lead">Este es su panel de inicio.</p>
			<hr class="m-y-md">
			<p>Para obtener mayor información sobre los permisos que usted posee simplemente chequee su barra lateral.</p>
		</div>
</div>
@endsection