<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $casts = [
        'content' => 'array'
    ];

    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
}
