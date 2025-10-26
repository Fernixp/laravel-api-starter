<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Electrónica
            [
                'nombre' => 'Smartphone Galaxy A15',
                'precio' => 1500,
                'categoria_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Auriculares Bluetooth JBL',
                'precio' => 450,
                'categoria_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Ropa
            [
                'nombre' => 'Polera deportiva Nike',
                'precio' => 220,
                'categoria_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Pantalón de jeans Levis',
                'precio' => 320,
                'categoria_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Alimentos
            [
                'nombre' => 'Café molido 500g',
                'precio' => 60,
                'categoria_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Hogar
            [
                'nombre' => 'Lámpara de mesa LED',
                'precio' => 180,
                'categoria_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Producto::insert($data);
    }
}
