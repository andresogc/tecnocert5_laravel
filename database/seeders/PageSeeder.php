<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [   
                'id' => 1,
                'slug' => 'index',
                'title' => 'Inicio',
                'description' => 'Página principal de inicio',
            ],
            [   
                'id' => 2,
                'slug' => 'iso9001',
                'title' => 'ISO 90001:2015',
                'description' => 'Sección ISO 90001:2015',
            ],
            [   
                'id' => 3,
                'slug' => 'gap_analisis',
                'title' => 'Gap Análisis',
                'description' => 'Página de gap análisis',
            ],
            
            [   
                'id' => 4,
                'slug' => 'auditoria_interna',
                'title' => 'Auditoria_Interna',
                'description' => 'Sección de auditoría interna ',
            ],
             [   
                'id' => 5,
                'slug' => 'AVISO_LEGAL',
                'title' => 'AVISO_LEGAL',
                'description' => 'Página de terminos legales AVISO_LEGAL',
            ],
            [   
                'id' => 6,
                'slug' => 'capacitacion',
                'title' => 'Capacitación',
                'description' => 'Sección de capacitación.',
            ],
            [   
                'id' => 7,
                'slug' => 'verifica_tu_certificado',
                'title' => 'Verifica tu certificado',
                'description' => 'Sección modal que lleva formulario para verificar certificados',
            ],
            [   
                'id' => 8,
                'slug' => 'blog',
                'title' => 'Novedades técnicas',
                'description' => 'Sección de novedades técnicas.',
            ],
            [   
                'id' => 9,
                'slug' => 'work',
                'title' => 'Trabaja con nosotros',
                'description' => 'Sección de trabajo con nosotros.',
            ],
            [   
                'id' => 10,
                'slug' => 'contact',
                'title' => 'Contacto',
                'description' => 'Sección de contacto.',
            ],
            [
                'id' => 11,
                'slug' => 'footer',
                'title' => 'Footer',
                'description' => 'Sección footer.',
            ],
            [
                'id' => 12,
                'slug' => 'questions',
                'title' => 'preguntas frecuentes',
                'description' => 'Sección footer.',
            ]

        ]);
    }
}
