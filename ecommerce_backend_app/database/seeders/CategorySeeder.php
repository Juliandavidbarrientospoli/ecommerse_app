<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Creamos categorías para la tienda de belleza y salud
        $categories = [
            'Cuidado Facial',
            'Cuidado Corporal',
            'Maquillaje',
            'Cabello',
            'Suplementos',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => \Str::slug($category),  // Crear un slug basado en el nombre
            ]);
        }
    }
}
