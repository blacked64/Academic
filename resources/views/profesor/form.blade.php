    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nombre" id="inputtext" value="{{ $profesor->nombre ?? old('nombre') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Cédula</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="cedula" id="inputPassword" value="{{ $profesor->cedula ?? old('cedula') }}" min="1000" max="9000000">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Dirección</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="direccion" id="inputPassword" value="{{ $profesor->direccion ?? old('direccion') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Telefonos</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="telefonos" id="inputPassword" value="{{ $profesor->telefonos ?? old('telefonos') }}">
      </div>
    </div>
