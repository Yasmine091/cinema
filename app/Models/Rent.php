<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    
    public function users(){
        $this->belongsToMany(Users::class, 'id');
    }

    public function movies(){
        $this->belongsToMany(Movies::class, 'id');
    }
}
