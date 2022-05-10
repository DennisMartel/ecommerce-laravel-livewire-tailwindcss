<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            // Celulares y tablets
            [
                'category_id' => 1,
                'name' => 'Celulares y Smartphones',
                'slug' => Str::slug('Celulares y Smartphones'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
            ],

            // TV y Audio
            [
                'category_id' => 2,
                'name' => 'TV y Audio',
                'slug' => Str::slug('TV y Audio'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],

            // Consola y Videojuegos
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation'),
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC'),
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],

            // Computación
            [
                'category_id' => 4,
                'name' => 'Portátiles',
                'slug' => Str::slug('Portátiles'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'PC de escritorios',
                'slug' => Str::slug('PC de escritorios'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios de computadoras',
                'slug' => Str::slug('Accesorios de computadoras'),
                'color' => true,
            ],

            // Moda
            [
                'category_id' => 5,
                'name' => 'Damas',
                'slug' => Str::slug('Damas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Caballeros',
                'slug' => Str::slug('Caballeros'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
                'color' => true,
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
