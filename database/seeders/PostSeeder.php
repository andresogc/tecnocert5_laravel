<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Post::create([
                'id' => 1,
                'title' => 'TECNOCERT llega al mercado de certificación de Sistemas de Gestión',
                'slug' => Str::slug('TECNOCERT llega al mercado'),
                'excerpt' => 'El mercado de la certificación de sistemas de gestión evoluciona constantemente para responder a las nuevas exigencias de calidad, seguridad, sostenibilidad y cumplimiento normativo.',
                'content' => '<p>El mercado de la certificación de sistemas de gestión evoluciona constantemente para responder a las nuevas exigencias de calidad, seguridad, sostenibilidad y cumplimiento normativo. En este contexto,<strong>TECNOCERT </strong>, irrumpe como una nueva alternativa especializada, confiable y alineada con los estándares internacionales, con el propósito de fortalecer la competitividad de las organizaciones en Colombia y Latinoamérica.</p>

                <p>TECNOCERT nace con una visión clara:<strong>certificar con rigor técnico, transparencia y enfoque en la mejora continua,</strong> acompañando a las empresas en su camino hacia la excelencia operativa. Su propuesta se basa en procesos de auditoría objetivos, personal altamente calificado y un profundo conocimiento de los diferentes sectores productivos.</p>

                <p><strong>Certificación con enfoque estratégico </strong>Más allá de cumplir un requisito normativo, la certificación de sistemas de gestión se convierte en una herramienta estratégica para las organizaciones. TECNOCERT entiende este enfoque y por ello ofrece servicios de certificación que aportan valor real al negocio, impulsando la eficiencia de los procesos, la gestión del riesgo y la confianza de clientes y partes interesadas.</p>

                <p>Entre los sistemas de gestión que certifica TECNOCERT se encuentra <strong>ISO 9001 - Gestión de la Calidad</strong></p>

                <p><strong>Compromiso con la confianza y la mejora continua.</strong></p>

                <p>TECNOCERT se diferencia por su <strong>compromiso con la imparcialidad, la ética y la excelencia técnica,</strong> pilares fundamentales en la certificación de sistemas de gestión. Cada proceso es desarrollado bajo criterios claros, metodologías reconocidas y una comunicación cercana con las organizaciones certificadas.</p>

                <p>Con su llegada al mercado, TECNOCERT busca convertirse en un aliado estratégico para empresas que desean demostrar su cumplimiento, fortalecer su reputación y consolidar sistemas de gestión robustos y sostenibles.</p>

                <p><strong>Un nuevo aliado para la competitividad empresarial.</strong></p>

                <p>La entrada de TECNOCERT al sector representa una oportunidad para las organizaciones que buscan una certificadora moderna, ágil y orientada a generar confianza. Su enfoque en la calidad del servicio y la mejora continua marca el inicio de una nueva etapa en la certificación de sistemas de gestión.</p>

                <p><strong>TECNOCERT: certificando con confianza, impulsando la excelencia.</strong></p>',
                'icons' => [],
                'status' => 'published',
                'author_id' => 1,
                'published_at' => '2026-02-17 09:06:27',
        ]);


        Post::create([
            'id' => 2,
            'title' => '¿SABÍAS QUÉ LA NORMA ISO 9001 ENTRARÁ EN ACTUALIZACIÓN?',
            'slug' => Str::slug('La norma ISO 9001:2026'),
            'excerpt' => '¿Sabías que la norma <strong>ISO9001</strong> entrará en actualización?',
            'content' => '<p>La norma ISO 9001:2026 será la próxima revisión del estándar de Sistemas de Gestión de la Calidad (SGC), prevista para su publicación definitiva en 2026, sustituyendo a la versión 2015. Mantendrá la estructura de alto nivel (Anexo SL), incorporando enfoques modernos como digitalización, sostenibilidad, cultura de calidad, resiliencia organizacional y conducta ética, buscando adaptarse a los retos globales actuales. No obstante, nos encontramos a la confirmación y publicación final de los posibles cambios.</p>
            <p><strong>Estado Actual y Transición;</strong></p>
            <ul>
                <li><strong>Fases:</strong> Actualmente, se están revisando los borradores internos (DIS - Draft International Standard). Se espera que el borrador final (FDIS) se publique alrededor del tercer o cuarto trimestre de 2026.</li>
                <li><strong>Transición:</strong> Las organizaciones certificadas deberán realizar la transición en un período previsto de 3 años (hasta finales de 2029).</li>
                <li><strong>Impacto:</strong> Se anticipan cambios moderados enfocados en mejorar la relevancia de la norma en un entorno empresarial cambiante.</li>
            </ul>
            <p>Para las organizaciones, esta actualización representa una oportunidad para realinear sus sistemas de gestión con los objetivos estratégicos y asegurar la continuidad en el cumplimiento de los estándares de calidad modernos.</p>',
            'icons' => [],
            'status' => 'published',
            'author_id' => 1,
            'published_at' => '2026-02-17 09:06:27',
        ]);


        Post::create([
            'id' => 3,
            'title' => '¿SABÍAS QUÉ?',
            'slug' => Str::slug('Sí certificas tu empresa'),
            'excerpt' => '¿Sabías qué?. Sí certificas tu empresa en <strong>ISO 9001:2015.</strong>',
            'content' => '<p>Sí certificas tu empresa en <strong>ISO 9001:2015</strong>, tu certificado de <strong>RETIE y RETILAP</strong> pueden llegar a tener una vigencia por 5 años.</p>

                <p>De acuerdo con la <strong>RESOLUCIÓN NÚMERO 40150 RETILAP y 40117 RETIE.</strong> Al contar con un sistema de gestión de calidad ISO 9001:2015 certificado, tu certificado de <strong>RETIE</strong> y <strong>RETILAP</strong> pasa a esquema 5, y tendrán una validez por 5 años, con vigilancia a los 12 y 32 meses desde la emisión del certificado. Adicional la revisión sería documental.</p>',
            'icons' => [
                [
                    'icon' => 'fa fa-plug',
                    'text' => 'RETIE'
                ],
                [
                    'icon' => 'fa fa-lightbulb-o',
                    'text' => 'RETILAP'
                ]
            ],
            'status' => 'published',
            'author_id' => 1,
            'published_at' => '2026-02-17 09:06:27',
        ]);
    }
}
 