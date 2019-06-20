<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $director = User::create([
        	'name' => 'Director José',
        	'email' => 'd@d.com',
        	'password' => '123456'
        ]);

        $coordinadora = User::create([
        	'name' => 'Coordinadora Marie',
        	'email' => 'c@c.com',
        	'password' => '123456'
        ]);

        $secretaria = User::create([
            'name' => 'Secretario Alfonso',
            'email' => 's@s.com',
            'password' => '123456'
        ]);

        $direct_rol = Role::find(1);
        $director->roles()->save($direct_rol);

        $coor_rol = Role::find(2);
        $coordinadora->roles()->save($coor_rol);

        $secretaria->roles()->sync([3,4,5,6,7]);

    }
}
