<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public $table = "agency";

    use HasFactory;
    public function rates(){
        return $this->hasMany(Rate::class, 'rate_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
