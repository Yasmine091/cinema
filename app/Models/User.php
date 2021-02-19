<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    public function items(){
        return $this->hasMany(Carts::Class, 'fk_user');
    }

    public function rents(){
        return $this->hasMany(Rents::Class, 'fk_user');
    }
}
