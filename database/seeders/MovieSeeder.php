<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('movies')->insert([
                'title' => '',
                'released' => 'date de publication',
                'plot' => 'resume',
                'runtime' => 'duree',
                'poster' => 'affiche',
                'status' => 0,
                'imdbID' => 'tt005489',
            ]);
    }
}
