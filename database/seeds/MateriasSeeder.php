<?php

use App\Alumno;
use App\Materia;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Materia::truncate();

                // I
        Materia::create(['nombre' => 'Castellano', 'grado' => 1]);
        Materia::create(['nombre' => 'Inglés y otras Lenguas Extranjeras', 'grado' => 1]);
        Materia::create(['nombre' => 'Matemáticas', 'grado' => 1]);
        Materia::create(['nombre' => 'Educación Física', 'grado' => 1]);
        Materia::create(['nombre' => 'Arte y Patrimonio', 'grado' => 1]);
        Materia::create(['nombre' => 'Ciencias Naturales', 'grado' => 1]);
        Materia::create(['nombre' => 'Geografía, Historia y Cuidadanía', 'grado' => 1]);

                // II
        Materia::create(['nombre' => 'Castellano', 'grado' => 2]);
        Materia::create(['nombre' => 'Inglés y otras Lenguas Extranjeras', 'grado' => 2]);
        Materia::create(['nombre' => 'Matemáticas', 'grado' => 2]);
        Materia::create(['nombre' => 'Educación Física', 'grado' => 2]);
        Materia::create(['nombre' => 'Arte y Patrimonio', 'grado' => 2]);
        Materia::create(['nombre' => 'Ciencias Naturales', 'grado' => 2]);
        Materia::create(['nombre' => 'Geografía, Historia y Cuidadanía', 'grado' => 2]);

                // III
        Materia::create(['nombre' => 'Castellano', 'grado' => 3]);
        Materia::create(['nombre' => 'Inglés y otras Lenguas Extranjeras', 'grado' => 3]);
        Materia::create(['nombre' => 'Matemáticas', 'grado' => 3]);
        Materia::create(['nombre' => 'Educación Física', 'grado' => 3]);
        Materia::create(['nombre' => 'Física', 'grado' => 3]);
        Materia::create(['nombre' => 'Química', 'grado' => 3]);
        Materia::create(['nombre' => 'Biología', 'grado' => 3]);
        Materia::create(['nombre' => 'Geografía, Historia y Cuidadanía', 'grado' => 3]);

                // IV
        Materia::create(['nombre' => 'Castellano', 'grado' => 4]);
        Materia::create(['nombre' => 'Inglés y otras Lenguas Extranjeras', 'grado' => 4]);
        Materia::create(['nombre' => 'Matemáticas', 'grado' => 4]);
        Materia::create(['nombre' => 'Educación Física', 'grado' => 4]);
        Materia::create(['nombre' => 'Física', 'grado' => 4]);
        Materia::create(['nombre' => 'Química', 'grado' => 4]);
        Materia::create(['nombre' => 'Biología', 'grado' => 4]);
        Materia::create(['nombre' => 'Geografía, Historia y Cuidadanía', 'grado' => 4]);
        Materia::create(['nombre' => 'Formación para la Soberanía Nacional', 'grado' => 4]);

                // V
        Materia::create(['nombre' => 'Castellano', 'grado' => 5]);
        Materia::create(['nombre' => 'Inglés y otras Lenguas Extranjeras', 'grado' => 5]);
        Materia::create(['nombre' => 'Matemáticas', 'grado' => 5]);
        Materia::create(['nombre' => 'Educación Física', 'grado' => 5]);
        Materia::create(['nombre' => 'Física', 'grado' => 5]);
        Materia::create(['nombre' => 'Química', 'grado' => 5]);
        Materia::create(['nombre' => 'Biología', 'grado' => 5]);
        Materia::create(['nombre' => 'Ciencias de la Tierra', 'grado' => 5]);
        Materia::create(['nombre' => 'Geografía, Historia y Cuidadanía', 'grado' => 5]);
        Materia::create(['nombre' => 'Formación para la Soberanía Nacional', 'grado' => 5]);
    }
}
