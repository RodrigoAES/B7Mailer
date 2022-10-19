<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Rodrigo Alves Do Espirito Santo',
            'email' => 'rodrigoaes,.20@hotmail.com',
            'password' => '1234'
        ]);
    }
}
