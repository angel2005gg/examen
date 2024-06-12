<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejemplar extends Model
{
    use HasFactory;
    public function libro(){
     
        return $this->belongsToMany('App\Models\libro');
}
}
