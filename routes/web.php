<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('test', function(){
        \Maatwebsite\Excel\Facades\Excel::load('public/csv/1I.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
            	if($alumno->nombre !== null && $alumno->nombre !== false)
            	{
            		dump($alumno->nombre);
	                \App\Alumno::create([
	                    'nombre' => $alumno->nombre,
	                    'grado' => $alumno->grado,
	                    'seccion' => $alumno->seccion,
	                    'cedula' => $alumno->cedula
	                ]);
            	}
            }
        });
});*/

Route::get('boletines', 'BoletinController@index')->name('boletin.index');

Route::post('boletin', 'BoletinController@show')->name('boletin.show');

Route::get('/', 'HomeController@index')->name('home');

Route::resource('admin', 'AdminController')->middleware(['auth', 'roles:director'])->except([
	'show'
]);

Route::resource('coordination', 'CoordinatorController')->middleware(['auth', 'roles:coordinador'])->except([
	'show'
]);

Route::group(['prefix' => 'materias', 'middleware' => ['auth', 'roles:tarea_materia']], function(){
	Route::get('/','MateriaController@index')->name('materias.index');
	Route::get('/create','MateriaController@create')->name('materias.create');
	//Route::get('/{id}','MateriaController@show')->name('materias.show');
	Route::post('/','MateriaController@store')->name('materias.store');
	Route::get('/{id}/edit','MateriaController@edit')->name('materias.edit');
	Route::put('/{id}','MateriaController@update')->name('materias.update');
	Route::delete('/{id}','MateriaController@destroy')->name('materias.destroy');
});
/*
Route::group(['prefix' => 'seccions', 'middleware' => ['auth', 'roles:tarea_seccion']], function(){
	Route::get('/','SeccionController@index')->name('seccions.index');
	Route::get('/create','SeccionController@create')->name('seccions.create');
	//Route::get('/{id}','SeccionController@show')->name('seccions.show');
	Route::post('/','SeccionController@store')->name('seccions.store');
	Route::get('/{id}/edit','SeccionController@edit')->name('seccions.edit');
	Route::put('/{id}','SeccionController@update')->name('seccions.update');
	Route::delete('/{id}','SeccionController@destroy')->name('seccions.destroy');
});
*/
Route::group(['prefix' => 'profesores', 'middleware' => ['auth', 'roles:tarea_profesor']], function(){
	Route::get('/','ProfesorController@index')->name('profesores.index');
	Route::get('/create','ProfesorController@create')->name('profesores.create');
	//Route::get('/{id}','ProfesorController@show')->name('profesores.show');
	Route::post('/','ProfesorController@store')->name('profesores.store');
	Route::get('/{id}/edit','ProfesorController@edit')->name('profesores.edit');
	Route::put('/{id}','ProfesorController@update')->name('profesores.update');
	Route::delete('/{id}','ProfesorController@destroy')->name('profesores.destroy');
});

Route::group(['prefix' => 'notas', 'middleware' => ['auth', 'roles:tarea_notas']], function(){
	Route::get('/','NotaController@index')->name('notas.index');
	Route::get('/create','NotaController@create')->name('notas.create');
	Route::post('/show','NotaController@show')->name('notas.crear');
	Route::post('/','NotaController@store')->name('notas.store');
	Route::delete('/{id}', 'NotaController@destroy')->name('notas.destroy');
	Route::get('/alumnos_json', 'NotaController@alumnosJson')->name('notas.alumnos');
});

Route::group(['prefix' => 'alumnos', 'middleware' => ['auth', 'roles:tarea_alumno']], function(){
	Route::get('/','AlumnoController@index')->name('alumnos.index');
	Route::get('/create','AlumnoController@create')->name('alumnos.create');
	//Route::get('/{id}','AlumnoController@show')->name('alumnos.show');
	Route::post('/','AlumnoController@store')->name('alumnos.store');
	Route::get('/{id}/edit','AlumnoController@edit')->name('alumnos.edit');
	Route::put('/{id}','AlumnoController@update')->name('alumnos.update');
	Route::delete('/{id}','AlumnoController@destroy')->name('alumnos.destroy');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
