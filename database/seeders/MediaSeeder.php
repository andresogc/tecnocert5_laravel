<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert([
            [       
                'id' => 1,
                'mediable_id' => 1, // ID de la sección "hero"
                'mediable_type' => 'App\\Models\\Section',
                'type' => 'image',
                'url' => '/main-page/images/bg_1.webp',
                'alt_text' => 'Imagen de fondo',
                'role' => 'background',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [       
                'id' => 2,
                'mediable_id' => 1, 
                'mediable_type' => 'App\\Models\\Section',
                'type' => 'image',
                'url' => '/main-page/images/Dos.webp', 
                'alt_text' => 'Imagen de fondo',
                'role' => 'background',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [       
                'id' => 3,
                'mediable_id' => 3,
                'mediable_type' => 'App\\Models\\Section',
                'type' => 'image',
                'url' => '/main-page/images/Tres.webp', 
                'alt_text' => 'Icono de primera colunma',
                'role' => 'background',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [       
                'id' => 4,
                'mediable_id' => 1,
                'mediable_type' => 'App\\Models\\Post',
                'type' => 'image',
                'url' => '/main-page/images/image_1.jpg', 
                'alt_text' => 'Imagen de post 1',
                'role' => 'gallery',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [       
                'id' => 5,
                'mediable_id' => 2,
                'mediable_type' => 'App\\Models\\Post',
                'type' => 'image',
                'url' => '/main-page/images/image_2.jpg', 
                'alt_text' => 'Imagen de post 2',
                'role' => 'gallery',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [       
                'id' => 6,
                'mediable_id' => 3,
                'mediable_type' => 'App\\Models\\Post',
                'type' => 'image',
                'url' => '/main-page/images/image_3.jpg', 
                'alt_text' => 'Imagen de post 3',
                'role' => 'gallery',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
          
           
        ]);
    }
}
