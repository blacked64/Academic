    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="inputtext" value="{{ $user->name ?? old('name') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputtext" class="col-sm-2 col-form-label">Correo Electrónico</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="inputPassword" value="{{ $user->email ?? old('email') }}">
      </div>

    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password" id="inputPassword">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password_confirmation" id="inputPassword">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Niveles</label>
      <div class="col-sm-10">
        {{ Form::select('role', $roles, null, ['class' => 'form-control']) }}
      </div>
    </div>