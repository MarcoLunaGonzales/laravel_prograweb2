<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            ['nombre' => 'Helado Rocky 2', 'descripcion' => 'Helado de Crema', 'precio' => '3', 'cantidad' => '100', 'estado'=>1],
            ['nombre' => 'Helado Delizaurio', 'descripcion' => 'Helado de Agua', 'precio' => '1.5', 'cantidad' => '50', 'estado'=>1],
            ['nombre' => 'Tentacion', 'descripcion' => 'Helado de Crema Premium', 'precio' => '8', 'cantidad' => '300', 'estado'=>1],
            ['nombre' => 'Brownie', 'descripcion' => 'Helado de Crema', 'precio' => '7', 'cantidad' => '200', 'estado'=>1],                        // Agrega más estudiantes aquí
        ];

        foreach ($productos as $producto) {
            \App\Models\Producto::create($producto);
        }

    }
}
