<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nombre' => 'Electrónica'],
            ['nombre' => 'Ropa'],
            ['nombre' => 'Alimentos'],
            ['nombre' => 'Hogar'],
        ];
        Categoria::insert($data);
    }
}
