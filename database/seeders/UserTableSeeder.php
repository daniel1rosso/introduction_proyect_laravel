<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = new User();
        $user->name = "Daniel";
        $user->email = "danielalbertorosso@gmail.com";
        $user->rol_id = 1;
        $user->password = "$2y$10$2PO3rNcDTdSDbW0p9wDD/.8pSc3WqMceHFDNfrFUOg9iwavfB9lrW";
        $user->save();
    }
}
