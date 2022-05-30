<?php

use Illuminate\Support\Facades\Route;

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

//Rotte per l'autenticazione gestite da Laravel
Auth::routes();

//Rotte per arrivare alla pagina dell'admin
Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin')
    ->prefix('admin')
    ->group(function(){
        Route::get('/', 'HomeController@index')
        ->name('home');
    });

//tutte le altre rotte portano alla 'guest home'
Route::get("{any?}", function(){
    return view('guest.home');
} )->where("any", ".");
