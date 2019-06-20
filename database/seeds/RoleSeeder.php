<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();


        Role::create([
            'nombre_clave' => 'director',
            'nombre_descriptivo' => 'Director de la Institución',
            'descripcion' => 'Director del instituto José Antonio Maitín.'
        ]);
        
        Role::create([
            'nombre_clave' => 'coordinador',
            'nombre_descriptivo' => 'Coordinador de la Institución',
            'descripcion' => 'Coordinador del instituto José Antonio Maitín.'
        ]);

        Role::create([
        	'nombre_clave' => 'secretary',
        	'nombre_descriptivo' => 'Secretaria/o de la Institución',
        	'descripcion' => 'Secretaria del instituto José Antonio Maitín.'
        ]);

        Role::create([
            'nombre_clave' => 'tarea_profesor',
            'nombre_descriptivo' => 'Encargado del panel Profesor',
            'descripcion' => 'Crear, actualizar, eliminar profesores.'
        ]);

        Role::create([
            'nombre_clave' => 'tarea_materia',
            'nombre_descriptivo' => 'Encargado del panel Materias',
            'descripcion' => 'Crear, actualizar, eliminar materias.'
        ]);

        Role::create([
            'nombre_clave' => 'tarea_alumno',
            'nombre_descriptivo' => 'Encargado del panel Alumno',
            'descripcion' => 'Crear, actualizar, eliminar alumnos.'
        ]);

        Role::create([
            'nombre_clave' => 'tarea_notas',
            'nombre_descriptivo' => 'Encargado del panel Notas',
            'descripcion' => 'Crear, actualizar, eliminar notas.'
        ]);

    }
}
