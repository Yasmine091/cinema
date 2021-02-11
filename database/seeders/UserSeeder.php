<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dudule',
            'email' => 'toto.dudule@yopmail.com',
            'password' => password_hash('1234', PASSWORD_DEFAULT),
            'role' => 0,
        ]);
    }
}
