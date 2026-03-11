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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->morphs('mediable');
            $table->enum('type', ['image','video','file']);
            $table->string('url');
            $table->string('alt_text')->nullable();
            $table->integer('order')->default(0);
            $table->enum('role', ['background','thumbnail','inline','gallery','banner','icon'])->default('inline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};


/* Rol	Uso típico	Ejemplo visual
background	Imagen o video que va detrás del contenido (fondos de secciones o headers)	Fondo del hero de la página principal
thumbnail	Imagen destacada o de portada del contenido	📌 Imagen principal del post (la que se muestra en la lista o al inicio del artículo)
inline	Imágenes insertadas dentro del texto (cuerpo del contenido)	Fotos dentro del texto del artículo
gallery	Varias imágenes complementarias que forman una galería	Carrusel o galería al final del post
banner	Imagen tipo anuncio o cabecera superior	Imagen grande tipo “banner” promocional
icon	Íconos decorativos o gráficos pequeños	Pequeños íconos junto a títulos o botones */