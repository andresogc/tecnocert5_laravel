<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * draft      → borrador (no visible)
     *   active     → visible en la web
     *   inactive   → desactivada
     *   closed     → vacante cerrada
     */
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
             // Title of the job vacancy (example: "Vacancy - ISO 9001 Freelance Auditor")
            $table->string('title');

            // Short summary shown at the top of the vacancy (1–2 paragraphs)
            $table->text('summary')->nullable();

            // Main responsibilities or functions of the position
            $table->json('main_responsibilities')->nullable();

            // Required academic education or certifications
            $table->json('academic_requirements')->nullable();

            // Required work experience for the position
            $table->json('experience_requirements')->nullable();

            // Skills or competencies required for the position
            $table->json('skills')->nullable();

            // Benefits or what the candidate can expect from the company
            $table->json('benefits')->nullable();

            // Publication date of the vacancy
            $table->date('published_at')->nullable();

            // User who created or published the vacancy
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete()
                ->comment('User who created the job vacancy');

            // Vacancy status: active, inactive, draft, closed, etc.
            $table->enum('status', [
                'draft', 
                'active',
                'inactive',
                'closed'
            ])->default('draft');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
