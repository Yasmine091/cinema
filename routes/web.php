<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Foundation\Auth\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('movies');
}
)->name('redirecting');

Route::fallback(function() {
    return view('404'); // la vue
 });


Route::get('/movies/{title}/{page}', ([MovieController::class, 'imdbAPI'])

)->name('testing');

Route::get('/add/{imdbID}', ([MovieController::class, 'movieFromAPI'])

)->name('saving');

Auth::routes();

Route::get('/home', function() {
    
})->name('home');

Route::get('/', ([MovieController::class, 'getMoviesByFilter'])
    
)->name('movies');

Route::get('/movie/{id}', ([MovieController::class, 'getMovie'])
    
)->name('movie');

Route::get('/search/{term}', ([MovieController::class, 'searchMovie'])

)->name('search');