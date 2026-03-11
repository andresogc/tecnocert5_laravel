<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['slug', 'title', 'description'];

    
    public function sections()
    {
        return $this->belongsToMany(Section::class)
            ->withPivot('order')
            ->orderBy('pivot_order');
    }
}
