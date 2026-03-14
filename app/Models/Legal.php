<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    

    public function User(){
        return $this->belongsTo(User::class,'updated_by');
    }

}
