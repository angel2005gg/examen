<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck_driver extends Model
{
    use HasFactory;
    public function truck(){
        return $this->belongsToMany('App\Models\truck_driver');
        return $this->belongsToMany('App\Models\truck');
    }
}
