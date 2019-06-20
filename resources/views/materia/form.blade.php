    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Nombre Materia</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nombre" id="inputPassword" value="{{ $materia->nombre ?? old('nombre') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Descripción</label>
      <div class="col-sm-10">
        <textarea name="descripcion" class="form-control">{{ $materia->descripcion ?? old('descripcion') }}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Año</label>
      <div class="col-sm-10 check-seccions">
        @foreach(\App\Alumno::CURSO as $seccion => $id)
          <div class="row">
            <div class="col-2"><input type="radio" name="grado" value="{{ $id }}"></div>
            <div class="col-10">{{ $seccion }}</div>
          </div>
        @endforeach
      </div>
    </div>