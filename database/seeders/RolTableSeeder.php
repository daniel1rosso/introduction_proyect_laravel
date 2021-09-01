<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();
        Rol::create([
            'nombre'=>'Administrador'
        ]);
        Rol::create([
            'nombre'=>'Usuario'
        ]);
    }
}
