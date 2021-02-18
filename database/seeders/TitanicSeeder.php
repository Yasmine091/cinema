<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TitanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $liste = Http::get('http://www.omdbapi.com/?s=titanic&plot=full&apikey=783d5d3b');
        foreach($liste['Search'] as $film) {
        $response =  Http::get('http://www.omdbapi.com/?i=' .$film['imdbID'].'&plot=full&apikey=783d5d3b');
        DB::table('movies')->insert([
            'title' => $response['Title'],
            'released' => $response['Released'],
            'plot' => $response['Plot'],
            'runtime' => $response['Runtime'],
            'poster' => $response['Poster'],
            'status' => 0,
            'imdbID' => $response['imdbID'],
        ]);
      }
    }
}
