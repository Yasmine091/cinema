<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasMany(Carts::Class, 'fk_user');
    }

    public function rents(){
        return $this->hasMany(Rents::Class, 'fk_user');
    }
}