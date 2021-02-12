<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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
    return view('welcome');
});



Route::get('/superapi/{title}', ([MovieController::class, 'imdbAPI']) 

)->name('testing');

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/hello/{name}', function () {
    return view('hello');
});
