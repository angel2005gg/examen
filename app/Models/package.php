<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;
    public function packaje(){
        return $this->belongsToMany('App\Models\truck_driver');
    

}
}