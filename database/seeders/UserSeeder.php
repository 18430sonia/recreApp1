<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniela',
            'apellido' => 'Campo',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12345'),
            'numero_documento' => '11013131',
            'tipo_documento' => 'cedula',
            'fecha_nacimiento' => '23/12/0000',
            'telefono' => '3107804134',
            'genero' => 'femenino'


        ])->assignRole('Coordinador');

        User::factory(20)->create();
    }
}
