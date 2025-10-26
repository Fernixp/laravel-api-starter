<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory()->count(500)->create();

        $usuarios = [
            [
                'name' => 'admin',
                'usuario' => 'admin',
                'email' => 'admin@galileo.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Fer',
                'usuario' => 'fer',
                'email' => 'fer@galileo.com',
                'password' => Hash::make('123456'),
            ],
        ];
        foreach ($usuarios as $usuario) {
            $user = User::create($usuario);
        }
    }
}
