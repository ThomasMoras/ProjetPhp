<?php

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

use projetPhp\User;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::get('/', function () {
    $users = User::all();
    return view('welcome',['utilisateurs' => $users]);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profil', 'ProfilController@index')->name('profil');

Route::post('/profil', 'ProfilController@create')->name('profil');

Route::get('/search', 'SearchController@index')->name('search');

Route::post('/search', 'SearchController@create')->name('search');
