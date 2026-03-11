<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sections')->insert([

            [
                'id' => 1,
                'name' => 'hero inicio',
                'title' => 'Hero principal',
                'content' => json_encode([

                    'slides'=>[
                        [
                            'title' => 'Donde la verdad, la excelencia y el compromiso fortalecen la confianza en tu organización.',
                            'eyebrow' => 'CERTIFICAMOS SISTEMAS DE GESTIÓN DE ALTO IMPACTO',
                            'buttons'=>[
                                [
                                    'name' => 'boton1',
                                    'text' => '¡Cotiza con nosotros!',
                                    'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                    'target' => '_blank'
                                ],
                            ],
                            'background' => 'url(images/bg_1.webp)'
                        ],
                        [
                            'title' => ' Certificación de sistemas de gestión que eleva tus estándares y respalda tu desempeño.',
                            'eyebrow' => 'Impulsamos organizaciones con certificaciones que generan confianza y excelencia.',
                            'buttons'=>[
                                [
                                    'name' => 'boton1',
                                    'text' => '¡Cotiza con nosotros!',
                                    'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                    'target' => '_blank'
                                ],
                            ],
                            'background' => 'url(images/Dos.webp)'
                        ],
                        [
                            'title' => ' Verificamos, certificamos y fortalecemos la gestión de tu organización.',
                            'eyebrow' => 'Aseguramos la calidad de tus procesos con certificaciones que transforman resultados.',
                            'buttons'=>[
                                [
                                    'name' => 'boton1',
                                    'text' => '¡Cotiza con nosotros!',
                                    'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                    'target' => '_blank'
                                ],
                            ],
                            'background' => 'url(images/tres.webp)'
                        ]
                    ],
                    'footer'=>[
                        'buttons' => [],
                        'texto' => 'Certificamos Sistemas de Gestión de alto impacto'
                    ],
                ]),
            ],

            [
                'id' => 2,
                'name' => 'contact information',
                'title' => 'Información de contacto',
                'content' => json_encode([
                    'cards' => [
                        [
                            'icon' => 'fa fa-phone',
                            'title' => 'Llámanos',
                            'text' => '+57 310 3366204'
                        ],
                        [
                            'icon' => 'fa fa-clock-o',
                            'title' => 'Lunes - Viernes',
                            'text' => '8:00 AM a 5:00 PM'
                        ],
                        [
                            'icon' => 'fa fa-map-marker',
                            'title' => 'Cra 51 No. 102a-39',
                            'text' => 'Barrio Pasadena'
                        ],
                    ]
                ]),
            ],

            [
                'id' => 3,
                'name' => 'services',
                'title' => 'Servicios',
                'content' => json_encode([
                    'title' => 'Conoce más acerca de nuestros servicios',
                    'subtitle' => 'Conoce más'
                ]),
            ],

            [
                'id' => 4,
                'name' => 'certificate process',
                'title' => 'Cómo obtener certificado',
                'content' => json_encode([
                    'title' => '¿Cómo obtengo un certificado de Sistema de Gestión?',
                    'title2'=>[
                        'part1' => 'CICLO DE CERTIFICACIÓN ',
                        'part2' => 'TECNOCERT'
                    ]
                ]),
            ],

            [
                'id' => 5,
                'name' => 'formats',
                'title' => 'Formatos y solicitudes',
                'content' => json_encode([
                    'title' => 'Formatos y solicitudes Tecnocert',
                    'subtitle' => 'Tu tranquilidad comienza con información clara'
                ]),
            ],

            [
                'id' => 6,
                'name' => 'about',
                'title' => 'Sobre nosotros',
                'content' => json_encode([
                    'title' => [
                        'part1' => 'Sobre',
                        'part2' => 'Nosotros'
                    ]
                ]),
            ],

            [
                'id' => 7,
                'name' => 'blog experts',
                'title' => 'Expertos en la norma',
                'content' => json_encode([
                    'title' => [
                        'part1' => 'Expertos en la Norma:',
                        'part2' => 'Análisis, Tendencias y Certificación'
                    ],
                    'subtitle' => 'Blog Técnico'
                ]),
            ],

            [
                'id' => 8,
                'name' => 'subscribe',
                'title' => 'Suscríbete',
                'content' => json_encode([
                    'title' => 'Suscríbete y acompáñanos con contenido pensado para ti'
                ]),
            ],
            [
                'id' => 9,
                'name' => 'hero iso 9001:2015',
                'title' => 'Hero principal',
                'content' => json_encode([
                    'title' => 'ISO 9001:2015',
                    'eyebrow' => 'SISTEMAS DE GESTIÓN',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => 'url(images/banner_iso.webp)'
                ]),
            ],
            [
                'id' => 10,
                'name' => 'Sistemas de Gestión de la Calidad',
                'title' => 'Sistemas de Gestión de la Calidad',
                'content' => json_encode([
                    'title' => 'ISO 9001:2015 - Sistemas de Gestión de la Calidad',
                ]),
            ],
            [
                'id' => 11,
                'name' => 'Principios de gestión de calidad',
                'title' => 'Principios de gestión de calidad',
                'content' => json_encode([
                    'title' => 'Está basada en los siete',
                    'subtitle'=>'Principios de gestión de calidad',
                    'cards' => [],
                ]),
            ],
            [
                'id' => 12,
                'name' => 'hero GAP analisis',
                'title' => 'Hero principal',
                'content' => json_encode([
                    'title' => 'GAP Análisis',
                    'eyebrow' => 'Servicio',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => ''
                ]),
            ],
            [
                'id' => 13,
                'name' => 'GAP análisis',
                'title' => 'GAP análisis',
                'content' => json_encode([
                    'title' => 'GAP análisis',
                    'subtitle'=>'',
                    'paragraphs' => [],
                ]),
            ],
            [
                'id' => 14,
                'name' => 'El análisis de brechas puede permitirles',
                'title' => 'El análisis de brechas puede permitirles',
                'content' => json_encode([
                    'title' => 'El análisis de brechas puede permitirles',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
             [
                'id' => 15,
                'name' => 'Preguntas frecuentes',
                'title' => 'Preguntas frecuentes',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 16,
                'name' => 'hero auditoria interna',
                'title' => 'Hero principal',
                'content' => json_encode([
                    'title' => 'Auditoría Interna',
                    'eyebrow' => 'Servicio',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => ''
                ]),
            ],
              [
                'id' => 17,
                'name' => 'Auditoría Interna',
                'title' => 'Auditoría Interna',
                'content' => json_encode([
                    'title' => 'Auditoría Interna',
                    'subtitle'=>'',
                    'paragraphs' => [],
                ]),
            ],
            [
                'id' => 18,
                'name' => 'La auditoría interna de Tecnocert',
                'title' => 'La auditoría interna de Tecnocert',
                'content' => json_encode([
                    'title' => 'La auditoría interna de Tecnocert',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
             [
                'id' => 19,
                'name' => 'Beneficios en auditoría interna con Tecnocert',
                'title' => 'Beneficios en auditoría interna con Tecnocert',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 20,
                'name' => 'Preguntas frecuentes',
                'title' => 'Preguntas frecuentes',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 21,
                'name' => 'hero capacitacion',
                'title' => 'Hero principal',
                'content' => json_encode([
                    'title' => 'Capacitación',
                    'eyebrow' => 'Servicio',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => ''
                ]),
            ],
               [
                'id' => 22,
                'name' => 'Capacitación',
                'title' => 'Capacitación',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
               [
                'id' => 23,
                'name' => 'Beneficios de nuestros programas de capacitación',
                'title' => 'Beneficios de nuestros programas de capacitación',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 24,
                'name' => 'Nuestras capacitaciones en Sistemas de Gestión te permiten:',
                'title' => 'Nuestras capacitaciones en Sistemas de Gestión te permiten:',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 25,
                'name' => 'hero novedades técnicas',
                'title' => 'hero novedades técnicas',
                'content' => json_encode([
                    'title' => 'Novedades Técnicas',
                    'eyebrow' => '¡SOMOR TECNOCERT!',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => ''
                ]),
            ],
              [
                'id' => 26,
                'name' => 'CONOCE TODAS LAS NOTICIAS QUE',
                'title' => 'CONOCE TODAS LAS NOTICIAS QUE',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
              [
                'id' => 27,
                'name' => 'Conoce más acerca de nuestros servicios',
                'title' => 'Conoce más acerca de nuestros servicios',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 28,
                'name' => 'Hero trabaja con nosotros',
                'title' => 'Trabaja con nosostros',
                'content' => json_encode([
                    'title' => 'Trabaja con nosostros',
                    'eyebrow' => 'CONOCE NUESTRAS VACANTES',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => ''
                ]),
            ],
            [
                'id' => 29,
                'name' => 'vacantes disponibles',
                'title' => 'vacantes disponibles',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
             [
                'id' => 30,
                'name' => 'Hero contacto',
                'title' => 'Hero contacto',
                'content' => json_encode([
                    'title' => 'CONTACTO',
                    'eyebrow' => '¡GRACIAS POR ESTAR AQUÍ!',
                    'footer'=>[
                        'buttons' => [
                            [
                                'name' => 'boton1',
                                'text' => 'Solicitar Cotización',
                                'link' => 'https://api.whatsapp.com/send?phone=573103366204',
                                'target' => '_blank'
                            ],
                        ],
                        'texto' => 'Nuestros ejecutivos comerciales te esperan para atender tus requerimientos.'
                    ],
                    'background' => ''
                ]),
            ],
              [
                'id' => 31,
                'name' => 'Contáctanos',
                'title' => 'Contáctanos',
                'content' => json_encode([
                    'title' => '',
                    'subtitle'=>'',
                    'list' => [],
                ]),
            ],
            [
                'id' => 32,
                'name' => 'map',
                'title' => 'map',
                'content' => json_encode([
                    'title' => '',
                    'address'=>'',
                    
                ]),
            ],
            [
                'id' => 33,
                'name' => '¡SOMOS TECNOCERT!',
                'title' => '¡SOMOS TECNOCERT!',
                'content' => json_encode([
                    'title' => '¡SOMOS TECNOCERT!',
                    'subtitle'=>'',
                    'terms' => [
                        [
                            'name' => 'Procedimiento del uso del logo.',
                            'link' => 'https://www.tecnocert.com/politica-de-privacidad/',
                            'storage_url'=>'./files/USOLOGO-TECNOCERT.pdf',
                        ],
                        [
                            'name' => 'Procedimiento de certificación términos y condiciones.',
                            'link' => 'https://www.tecnocert.com/terminos-y-condiciones/',
                            'storage_url'=>'./files/TC-PC-02_V1_Procedimiento_de_certificación_terminos_y_condiciones.pdf',
                            
                        ],
                          [
                            'name' => 'Política de calidad e imparcialidad.',
                            'link' => 'https://www.tecnocert.com/terminos-y-condiciones/',
                            'storage_url'=>'./files/TC-POLADM-01-2_V1_Politica_de_Calidad_e_imparcialidad.pdf',
                            
                        ],
                          [
                            'name' => 'Política de tratamiento de datos personales.',
                            'link' => 'https://www.tecnocert.com/terminos-y-condiciones/',
                            'storage_url'=>'./files/TC-POLADM-01-4_V1_Politica_de_tratamiento_de_datos_personales.pdf',
                            
                        ],
                        [
                            'name' => 'Procedimiento quejas y apelaciones.',
                            'link' => 'https://www.tecnocert.com/terminos-y-condiciones/',
                            'storage_url'=>'./files/TC-PO-02_V1_Procedimiento_Quejas_y_apelaciones.pdf',
                        ]
                    ],
                ]),
            ],
            [
                'id' => 34,
                'name' => 'hero questions',
                'title' => 'hero questions',
                'content' => json_encode([
                    'title' => '',
                    'address'=>'',
                    
                ]),
            ],
             [
                'id' => 35,
                'name' => 'questions',
                'title' => 'questions',
                'content' => json_encode([
                    'title' => '',
                    'address'=>'',
                    
                ]),
            ],


            
           

        ]);
    }
}
