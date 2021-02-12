<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class utilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    DB::table('utilisateurs')->insert([
        'name' => 'Toto',
        'email' => 'toto.dudule@yopmail.com',
        'password'=> 'test',
    ]);
    
}
}

