<?php

use App\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seccion::truncate();

        Seccion::create([
        	'name' => 'A'
        ]);
        Seccion::create([
        	'name' => 'B'
        ]);
        Seccion::create([
        	'name' => 'C'
        ]);
        Seccion::create([
        	'name' => 'D'
        ]);
        Seccion::create([
        	'name' => 'E'
        ]);
        Seccion::create([
        	'name' => 'F'
        ]);
    }
}
