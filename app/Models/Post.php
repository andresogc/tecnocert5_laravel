<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['title', 'slug', 'excerpt', 'content', 'icons','status', 'author_id', 'published_at'];

    protected $casts = [
        'icons' => 'array',
        'published_at' => 'datetime',
    ];

    // Relación: post pertenece a un autor (user)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function gallery()
    {
        return $this->media()->where('role', 'gallery')->orderBy('order')->get();
    }

    public function thumbnail()
    {
        return $this->media()->where('role', 'thumbnail')->first();
    }
}
