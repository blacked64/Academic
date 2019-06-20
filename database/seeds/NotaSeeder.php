<?php

use App\Nota;
use App\Alumno;
use App\Materia;
use App\Profesor;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Nota::truncate();
    	$materias = Materia::all();
        $alumnos = Alumno::all();
        $profesor = Profesor::all();

        $lapsos = ['I', 'II', 'III'];
        $boletin = [];

        foreach($alumnos as $alumno)
        {
            $materias = Materia::where('grado', $alumno->grado)->get();
            foreach($lapsos as $key => $lapso)
            {
                foreach($materias as $i => $materia)
                {
                    if($key == 0)
                    {
                        $boletin[$lapso][$i] = [
                            'materia' => $materia->nombre,
                            'nota' => rand(0,20)
                        ];
                    }
                    else 
                    {
                        $boletin[$lapso][$i] = [
                            'nota' => rand(0,20)
                        ];
                    }
                }
            }
/*
        foreach($alumnos as $alumno)
        {
        	$boletin = [
        		'I' => [
        			0 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			1 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			2 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			3 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			4 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			5 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			6 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        			7 => [
        			'materia' => $materias->random()->nombre,
        			'nota' => rand(0,20)
        			],
        		],
        		'II' => [
        			0 => [
        			'nota' => rand(0,20)
        			],
        			1 => [
        			'nota' => rand(0,20)
        			],
        			2 => [
        			'nota' => rand(0,20)
        			],
        			3 => [
        			'nota' => rand(0,20)
        			],
        			4 => [
        			'nota' => rand(0,20)
        			],
        			5 => [
        			'nota' => rand(0,20)
        			],
        			6 => [
        			'nota' => rand(0,20)
        			],
        			7 => [
        			'nota' => rand(0,20)
        			],
        		],
        		'III' => [
        			0 => [
        			'nota' => rand(0,20)
        			],
        			1 => [
        			'nota' => rand(0,20)
        			],
        			2 => [
        			'nota' => rand(0,20)
        			],
        			3 => [
        			'nota' => rand(0,20)
        			],
        			4 => [
        			'nota' => rand(0,20)
        			],
        			5 => [
        			'nota' => rand(0,20)
        			],
        			6 => [
        			'nota' => rand(0,20)
        			],
        			7 => [
        			'nota' => rand(0,20)
        			]
        		]
        	];
            */
        	$nota = Nota::create([
        		'alumno_id' => $alumno->id,
        		'boletin' => $boletin
        	]);
        }
    }
}
