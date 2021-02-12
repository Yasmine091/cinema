<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\FilmCollection;

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



Route::get('/test', ([FilmCollection::class, 'toArray'])

    /* $montableau = [
        'name' =>'Kuki',
        'msg' => 'welcome to your test page!'
    ];

    return view('test', $montableau); */



)->name('testing');

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/hello/{name}', function () {
    return view('hello');
});