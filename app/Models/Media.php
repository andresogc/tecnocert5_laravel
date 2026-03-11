<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
     protected $fillable = [
        'type', 'url', 'alt_text', 'order', 'role'
    ];

    // Relación: el medio pertenece a una sección
    public function mediable()
    {
        return $this->morphTo();
    }
}
