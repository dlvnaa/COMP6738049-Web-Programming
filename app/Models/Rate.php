<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public function Agency(){
        return $this->belongsTo(Agency::class, 'rate_id');
    }

}
