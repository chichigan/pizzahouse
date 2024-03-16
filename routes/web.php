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

Route::get('/pizzas', function () {
	
	//Variable for if else and unless example in pizzas.blade.php
	// $pizza = [
		// 'type'=>'hawaiian',
		// 'base'=>'garlic crust',
		// 'price'=>3
	// ];
    // return view('pizzas',$pizza);
	
	$pizzas = [
		['type'=>'hawaiian','base'=>'cheesy crust'],
		['type'=>'volcano','base'=>'garlic crust'],
		['type'=>'veg supreme','base'=>'thin $ crispy']
	];
    return view('pizzas',['pizzas' => $pizzas]);
	
	
});
