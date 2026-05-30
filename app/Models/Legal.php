<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    protected $fillable = [
        'name', 'slug', 'file_path', 'file_name', 'placement', 'order','updated_by'
    ];

    public function User(){
        return $this->belongsTo(User::class,'updated_by');
    }

}
