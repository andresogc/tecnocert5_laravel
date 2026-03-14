<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Vacancy::create([
                'id' => 1,
                'title' => 'Vacante - Auditor Freelance ISO 9001',
                'summary' => 'Buscamos auditores freelance con sólida formación profesional y experiencia comprobada en auditoría de tercera parte. El rol requiere autonomía, criterio técnico, cumplimiento de estándares y disponibilidad inmediata para la programación de auditorías.',
                'main_responsibilities' => [
                    'Planificar y ejecutar auditorías de tercera parte en sistemas de gestión de la calidad.',
                    'Elaboración de informes consolidando resultados imparciales y con recomendaciones.',
                    'Verificación de las acciones correctivas y preventivas implementadas por las organizaciones.',
                    'Atender y responder observaciones durante el proceso de revisión técnica.',
                    'Participar en capacitaciones y reuniones técnicas de actualización.',
                ],
                'academic_requirements' => [
                    'Profesional.',
                    'Formación de 40 horas en auditoría (por ejemplo, según ISO 19011).',
                    'Auditor líder o principal en la norma ISO 9001:2015.',
                    'Conocimiento en requisitos legales.',
                ],
                'experience_requirements' => [
                    'Mínimo 4 años de experiencia laboral, con al menos 2 años en áreas relacionadas con la gestión de la calidad.',
                    'Experiencia como líder de equipo en 10 días de auditoría en la norma ISO 9001.',
                ],
                'skills' => [
                    'Excelente comunicación oral y escrita.',
                    'Capacidad analítica y manejo eficiente del tiempo.',
                    'Nivel intermedio de Microsoft Office.',
                    'Disponibilidad para viajar dentro del país.',
                ],
                'benefits' => [
                    'Contrato por prestación de servicios.',
                    'Asignación de auditorías según disponibilidad y desempeño.',
                    'Tarifa acorde al servicio, competitiva según el alcance de cada auditoría.',
                ],
                'published_at' => now(),
                'status' => 'active',
                'user_id' => 1,
        ]);  
    }
}
