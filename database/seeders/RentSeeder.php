<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            'id_user' => 1,
            'id_movie' => 1,
            'status' => 0,
            'date_rent' => time(),
            'late_indication' => '',
        ]);
    }
}
