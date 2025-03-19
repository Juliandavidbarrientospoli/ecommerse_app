<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamamos a los seeder
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
