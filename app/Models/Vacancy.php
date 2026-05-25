<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'main_responsibilities',
        'academic_requirements',
        'experience_requirements',
        'skills',
        'benefits',
        'published_at',
        'status',
        'user_id',
        
    ];

    protected $casts = [
        'main_responsibilities' => 'array',
        'academic_requirements' => 'array',
        'experience_requirements' => 'array',
        'skills' => 'array',
        'benefits' => 'array',
        'published_at' => 'datetime',
    ];

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
