<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MateriasSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(AlumnoSeeder::class);
         $this->call(ProfesorSeeder::class);
         $this->call(NotaSeeder::class);

         /*
         $this->call(SeccionSeeder::class);
         $this->call(ProfesorSeeder::class);*/
    }
}
