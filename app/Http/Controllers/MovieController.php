<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function imdbAPI($title){

        $json = json_decode(file_get_contents('http://www.omdbapi.com/?t=' . $title . '&plot=full&apikey=783d5d3b'), true);
        return $json;
        
    }

}