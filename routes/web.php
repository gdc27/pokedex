<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokeApiController;

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

Route::get('/',[PokeApiController::class,'Pokemons'])->name('poke.home');
Route::get('/{id}',[PokeApiController::class,'Pokemons']);

Route::get('/pokemon/{id}',[PokeApiController::class,'Pokemon']);

