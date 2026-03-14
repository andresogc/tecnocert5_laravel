<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('legals', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del documento (Política de privacidad)
            $table->string('slug')->unique(); // identificador: privacy-policy
            $table->string('file_path'); // ruta del pdf almacenado
            $table->string('file_name')->nullable(); // nombre original del archivo
            $table->enum('placement', ['slide-formats', 'footer-terms'])->default('footer-terms'); // ubicación del enlace
            $table->integer('order');
            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legals');
    }
};
