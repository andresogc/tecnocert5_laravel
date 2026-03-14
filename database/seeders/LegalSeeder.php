<?php

namespace Database\Seeders;

use App\Models\Legal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Legal::create([
                'id' => 1,
                'name' => 'Formato de solicitud de certificación',
                'slug' => 'Formato_de_solicitud de certificación',
                'file_path' => 'storage/legals/TC-FC-01-1_V1_Solicitud_de_certificación_de_sistemas_de_gestión.xlsx',
                'file_name' => 'TC-FC-01-1_V1_Solicitud_de_certificación_de_sistemas_de_gestión.xlsx',
                'placement'=> 'slide-formats',
                'updated_by' => 1,
                'order'=>1
        ]);  

        Legal::create([
                'id' => 2,
                'name' => 'Formato de quejas y apelaciones',
                'slug' => 'formato_de_quejas_y_apelaciones',
                'file_path' => 'storage/legals/TC-FO-02-1_V1_Formato_Quejas_y_apelaciones.docx',
                'file_name' => 'TC-FO-02-1_V1_Formato_Quejas_y_apelaciones.docx',
                 'placement'=> 'slide-formats',
                'updated_by' => 1,
                'order'=>2
        ]);  

        Legal::create([
                'id' => 3,
                'name' => 'Procedimiento de certificación términos y condiciones.',
                'slug' => 'procedimiento_de_certificación_términos_y_condiciones',
                'file_path' => 'storage/legals/TC-PC-02_V1_Procedimiento_de_certificación_terminos_y_condiciones.pdf',
                'file_name' => 'TC-PC-02_V1_Procedimiento_de_certificación_terminos_y_condiciones.pdf',
                'placement'=> 'footer-terms',
                'updated_by' => 1,
                'order'=>2
        ]);  

        Legal::create([
                'id' => 4,
                'name' => 'Procedimiento quejas y apelaciones.',
                'slug' => 'procedimiento_de_quejas_y_apelaciones',
                'file_path' => 'storage/legals/TC-PO-02_V1_Procedimiento_Quejas_y_apelaciones.pdf',
                'file_name' => 'TC-PO-02_V1_Procedimiento_Quejas_y_apelaciones.pdf',
                'placement'=> 'footer-terms',
                'updated_by' => 1,
                'order'=>5
        ]);  

        Legal::create([
                'id' => 5,
                'name' => 'Política de calidad e imparcialidad.',
                'slug' => 'política_de_calidad_e_imparcialidad',
                'file_path' => 'storage/legals/TC-POLADM-01-2_V1_Politica_de_Calidad_e_imparcialidad.pdf',
                'file_name' => 'TC-POLADM-01-2_V1_Politica_de_Calidad_e_imparcialidad.pdf',
                 'placement'=> 'footer-terms',
                'updated_by' => 1,
                'order'=>3
        ]);  

        Legal::create([
                'id' => 6,
                'name' => 'Política de tratamiento de datos personales.',
                'slug' => 'política_de_tratamiento_de_datos_personales',
                'file_path' => 'storage/legals/TC-POLADM-01-4_V1_Politica_de_tratamiento_de_datos_personales.pdf',
                'file_name' => 'TC-POLADM-01-4_V1_Politica_de_tratamiento_de_datos_personales.pdf',
                 'placement'=> 'footer-terms',
                'updated_by' => 1,
                'order'=>4
        ]);  

        Legal::create([
                'id' => 7,
                'name' => 'Procedimiento del uso del logo.',
                'slug' => 'procedimiento_del_uso_del_logo',
                'file_path' => 'storage/legals/USOLOGO-TECNOCERT.pdf',
                'file_name' => 'USOLOGO-TECNOCERT.pdf',
                 'placement'=> 'footer-terms',
                'updated_by' => 1,
                'order'=>1
        ]);  
    }
}
