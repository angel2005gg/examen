<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saca extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsToMany('App\Models\ejemplar');
        return $this->belongsToMany('App\Models\usuario');
}
}
