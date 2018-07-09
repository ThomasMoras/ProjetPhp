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

Route::get('/', function () {
    return view('welcome');
});
//$this->app['router']->get('/', function() { return 'Coucou'; });
//app('router')->get('/', function() { return 'Coucou'; });

//Route::get('{n}', function($n) {
//    return 'Je suis la page ' . $n . ' !';
//});
//
//Route::get('/home', ['as' => 'home', function()
//{
//    return 'Je suis la page d\'accueil !';
//}]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
