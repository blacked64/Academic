    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Nombre completo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nombre" id="inputtext" value="{{ $alumno->nombre ?? old('nombre') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Cédula</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="cedula" id="inputPassword" value="{{ $alumno->cedula ?? old('cedula') }}" min="1000000" max="90000000">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Dirección</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="direccion" id="inputPassword" value="{{ $alumno->direccion ?? old('direccion') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Telefonos</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="telefonos" id="inputPassword" value="{{ $alumno->telefonos ?? old('telefonos') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Año</label>
      <div class="col-sm-10 check-seccions">
        @foreach(\App\Alumno::CURSO as $grado => $id)
          <div class="row">
            <div class="col-2"><input type="radio" name="grado_id" value="{{ $id }}"></div>
            <div class="col-10">{{ $grado }}</div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-4 col-form-label">Sección Escolar</label>
      <div class="col-8">
        <select name="seccion" class="form-control">
          @foreach(\App\Alumno::SECCION as $i => $seccion)
            <option value="{{ $seccion }}"> {{ $seccion }}</option>
          @endforeach
        </select>
      </div>
    </div>
