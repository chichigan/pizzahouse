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

use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

//Show the pizza list
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');

//Create new pizza order
Route::get('/pizzas/create','PizzaController@create')->name('pizzas.create');

//Store data input from create page
Route::post('/pizzas','PizzaController@store')->name('pizzas.store');

//Show specific pizza order id
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');

//Delete
Route::delete('/pizzas/{id}','PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

//Auth
//['register'] mean disable register route
Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
