<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('page_section')->insert([
            // Inicio
            [
                'page_id' => 1,
                'section_id' => 1,
                'order' => 1
            ],
            [
                'page_id' => 1,
                'section_id' => 2,
                'order' => 2
            ],
            [
                'page_id' => 1,
                'section_id' => 3,
                'order' => 3
            ],
            [
                'page_id' => 1,
                'section_id' => 4,
                'order' => 4
            ],
            [
                'page_id' => 1,
                'section_id' => 5,
                'order' => 5
            ],
            [
                'page_id' => 1,
                'section_id' => 6,
                'order' => 6
            ],
            [
                'page_id' => 1,
                'section_id' => 7,
                'order' => 7
            ],
            [
                'page_id' => 1,
                'section_id' => 8,
                'order' => 8
            ],

            // ISO 9001:2015  también usa suscribete
            [
                'page_id' => 2,
                'section_id' => 9,
                'order' => 1
            ],
            [
                'page_id' => 2,
                'section_id' => 10,
                'order' => 2
            ],
            [
                'page_id' => 2,
                'section_id' => 11,
                'order' => 3
            ],
            [
                'page_id' => 2,
                'section_id' => 4,
                'order' => 4
            ],
            [
                'page_id' => 2,
                'section_id' => 8,
                'order' => 5
            ],
            //gap analisis
              [
                'page_id' => 3,
                'section_id' => 12,
                'order' => 5
            ],
              [
                'page_id' => 3,
                'section_id' => 13,
                'order' => 5
            ],
              [
                'page_id' => 3,
                'section_id' => 14,
                'order' => 5
            ],
              [
                'page_id' => 3,
                'section_id' => 15,
                'order' => 5
            ],
            [
                'page_id' => 3,
                'section_id' => 8,
                'order' => 6
            ],
            //auditoria interna
                [
                    'page_id' => 4,
                    'section_id' => 16,
                    'order' => 1
                ],
                [
                    'page_id' => 4,
                    'section_id' => 17,
                    'order' => 2
                ],
                [
                    'page_id' => 4,
                    'section_id' => 18,
                    'order' => 3
                ],
                [
                    'page_id' => 4,
                    'section_id' => 19,
                    'order' => 4
                ],
                [
                    'page_id' => 4,
                    'section_id' => 20,
                    'order' => 5
                ],
                [
                    'page_id' => 4,
                    'section_id' => 8,
                    'order' => 6
                ],
                //capacitacion
                [
                    'page_id' => 6,
                    'section_id' => 21,
                    'order' => 1
                ],
                [
                    'page_id' => 6,
                    'section_id' => 22,
                    'order' => 2
                ],
                [
                    'page_id' => 6,
                    'section_id' => 23,
                    'order' => 3
                ],
                [
                    'page_id' => 6,
                    'section_id' => 24,
                    'order' => 4
                ],
               
                [
                    'page_id' => 6,
                    'section_id' => 8,
                    'order' => 5
                ],
                //NOVEDADES TECNICAS
                [
                    'page_id' => 8,
                    'section_id' => 25,
                    'order' => 1
                ],
                [
                    'page_id' => 8,
                    'section_id' => 26,
                    'order' => 2
                ],
                [
                    'page_id' => 8,
                    'section_id' => 27,
                    'order' => 3
                ],
               
                 //trabaja con nosotros
                 [
                    'page_id' => 9,
                    'section_id' => 28,
                    'order' => 3
                ],
                [
                    'page_id' => 9,
                    'section_id' => 29,
                    'order' => 3
                ],
                //contacto
                [
                    'page_id' => 10,
                    'section_id' => 30,
                    'order' => 1
                ],
                [
                    'page_id' => 10,
                    'section_id' => 31,
                    'order' => 2
                ],
                [
                    'page_id' => 10,
                    'section_id' => 32,
                    'order' => 3
                ],
                //footer
                [
                    'page_id' => 11,
                    'section_id' => 33,
                    'order' => 1
                ],
                //questions
                  [
                    'page_id' => 12,
                    'section_id' => 34,
                    'order' => 1
                ],
                  [
                    'page_id' => 12,
                    'section_id' => 35,
                    'order' => 2
                ],
              
               


        ]);
    }
}
