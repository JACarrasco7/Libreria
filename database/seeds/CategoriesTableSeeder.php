<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nombre' => 'PHP'
        ]);

        Category::create([
            'nombre' => 'HTML 5'
        ]);

        Category::create([
            'nombre' => 'LARAVEL'
        ]);

        Category::create([
            'nombre' => 'NODE JS'
        ]);

        Category::create([
            'nombre' => 'VUE JS'
        ]);
    }
}
