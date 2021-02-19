<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function searchMovie($term){

        $movies = DB::table('movies')->where('title', 'like', $term)->orWhere('plot', 'like', $term)->get();
        return view('search', ['movies' => $movies]);
    }

    public function getMovie($id){

        $movie = DB::table('movies')->where('id', $id)->get();
        return view('movie', ['movie' => $movie]);
    }

    public function imdbAPI($title, $page){

        $response = Http::get('http://www.omdbapi.com/?s=' . $title . '&type=movie&page=' . $page . '&apikey=783d5d3b');
        return view('test', ['movies' => $response->json()]);

    }

    public function movieFromAPI($imdbID){

        $response = Http::get('http://www.omdbapi.com/?i=' . $imdbID . '&plot=full&type=movie&apikey=783d5d3b');

        DB::table('movies')->insert([
            'title' => $response['Title'],
            'released' => $response['Released'],
            'plot' => $response['Plot'],
            'runtime' => $response['Runtime'],
            'poster' => $response['Poster'],
            'status' => 0,
            'imdbID' => $response['imdbID'],
        ]);

        return view('welcome');
        ;

    }

}
