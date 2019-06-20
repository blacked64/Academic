<?php

use App\Profesor;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	Profesor::truncate();
    	for($i=0;$i<=50;$i++)
    	{
    		$profesor = Profesor::create([
    			'nombre' => $faker->name,
    			'cedula' => $faker->numberBetween(1000000,90000000),
    			'direccion' => $faker->address, 
    			'telefonos' => $faker->e164PhoneNumber,
    		]);
    	}
    }
}
