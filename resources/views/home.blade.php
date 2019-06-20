@extends('layouts.default')

@section('content')
    @if(auth()->user()->isSecretary())
        @include('dashboards.secretary')
    @elseif(auth()->user()->isDirector())
        @include('dashboards.director')
    @elseif(auth()->user()->isCoordinador())
    	@include('dashboards.coordinador')
    @endif
@endsection
