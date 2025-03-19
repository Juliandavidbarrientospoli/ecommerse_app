<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Usamos Faker para generar datos aleatorios
        $faker = Faker::create();

        // Tomamos todas las categorías existentes
        $categories = Category::all();

        // Crear productos
        foreach (range(1, 50) as $index) {
            Product::create([
                'name' => $faker->word() . ' ' . $faker->word(),  // Nombre del producto aleatorio
                'slug' => \Str::slug($faker->word() . ' ' . $faker->word()),  // Crear un slug
                'description' => $faker->paragraph(),  // Descripción aleatoria
                'price' => $faker->randomFloat(2, 5, 200),  // Precio aleatorio entre 5 y 200
                'stock' => $faker->numberBetween(1, 100),  // Stock aleatorio entre 1 y 100
                'category_id' => $categories->random()->id,  // Asignar una categoría aleatoria
                'image' => 'https://via.placeholder.com/300',  // Imagen de placeholder (puedes cambiarla si tienes imágenes reales)
                'is_active' => $faker->boolean(),  // Producto activo o no
            ]);
        }
    }
}
