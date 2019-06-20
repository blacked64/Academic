      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        @if(auth()->user()->isDirector())
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Administración</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->isCoordinador())
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('coordination.index') }}">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Coordinación</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->isTareaProfesor())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Profesores</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('profesores.index') }}">Mostrar Profesores</a>
            <a class="dropdown-item" href="{{ route('profesores.create') }}">Crear nuevo profesor</a>
          </div>
        </li>
        @endif
        @if(auth()->user()->isTareaAlumno())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Estudiantes</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('alumnos.index') }}">Mostrar Estudiantes</a>
            <a class="dropdown-item" href="{{ route('alumnos.create') }}">Crear nuevo estudiante</a>
          </div>
        </li>
        @endif
        @if(auth()->user()->isTareaNotas())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-sticky-note"></i>
            <span>Notas</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('notas.index') }}">Mostrar Notas</a>
            <a class="dropdown-item" href="{{ route('notas.create') }}">Crear nueva nota</a>
          </div>
        </li>
        @endif
        @if(auth()->user()->isTareaMateria())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-brain"></i>
            <span>Materias</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ route('materias.index') }}">Mostrar Materias</a>
            <a class="dropdown-item" href="{{ route('materias.create') }}">Crear nueva materia</a>
          </div>
        </li>
        @endif
      </ul>