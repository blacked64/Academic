<?php

use App\Alumno;
use App\Seccion;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;


class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	Alumno::truncate();
        Excel::load('public/csv/1I.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/2A.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/3F.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/3G.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/3H.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/3I.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/4E.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/4F.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/4G.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/4H.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/5A.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/5B.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/5C.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });

        Excel::load('public/csv/5D.csv', function($reader){
            foreach($reader->get() as $alumno)
            {
                if($alumno->nombre !== null && $alumno->nombre !== false)
                {
                    \App\Alumno::create([
                        'nombre' => $alumno->nombre,
                        'grado' => $alumno->grado,
                        'seccion' => $alumno->seccion,
                        'cedula' => $alumno->cedula
                    ]);
                }
            }
        });
    }
}
