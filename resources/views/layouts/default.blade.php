<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @stack('styles')

  </head>

  <body id="page-top" style="background-image: url({{ asset('img/1.jpg') }});">

    @include('layouts.sidebar.navi')    

    <div id="wrapper">

    @include('layouts.sidebar.sidebar')
     
      <div id="content-wrapper">
        <div id="app">
          @yield('content')
        </div>
      </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de cerrar sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Haga click en "Cerrar sesión" si es el caso.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="post" action="{{ route('logout') }}">
             @csrf 
            <button class="btn btn-primary" type="submit">Cerrar sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

  </body>

</html>
