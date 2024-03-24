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
Route::get('/pizzas', 'PizzaController@index');

//Create new pizza order
Route::get('/pizzas/create','PizzaController@create');

//Show specific pizza order id
Route::get('/pizzas/{id}', 'PizzaController@show');

//Store data input from create page
Route::post('/pizzas','PizzaController@store');

