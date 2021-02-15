<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function imdbAPI($title){

        $response = Http::GET('http://www.omdbapi.com/?t='.$title.'&plot=movie&page=1&apikey=783d5d3b');
        return view('test', ['movies' => $response -> json()]);

    }

    public function movieFromAPI($imdbID) {

        $response = Http::GET('http://www.omdbapi.com/?i=' . $imdbID . '&plot=movie&apikey=783d5d3b');

        DB::table('movies') -> insert ([
            'title' => $response['Title'],
            'released' => $response['Released'],
            'plot' => $response['Plot'],
            'runtime' => $response['Runtime'],
            'poster' => $response['Poster'],
            'status' => 0,
            'imdbID' => $response['imdbID'],
        ]);
    }

};