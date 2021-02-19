<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $response = Http::get('http://www.omdbapi.com/?t=Kureyon Shinchan: Buriburi Ôkoku no hihô&plot=full&apikey=783d5d3b');
        
        DB::table('movies')->insert([
            'title' => $response['Title'],
            'released' => $response['Released'],
            'plot' => $response['Plot'],
            'runtime' => $response['Runtime'],
            'poster' => $response['Poster'],
            'price' => '9.90',
            'status' => 0,
            'imdbID' => $response['imdbID'],
        ]);
    }
}