<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use Error;

class PizzaController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

    public function index(){
		//$pizzas=Pizza::all();
		//$pizzas=Pizza::orderBy('name','desc')->get();
		//$pizzas=Pizza::where('type','hawaiian')->get();
		$pizzas=Pizza::latest()->get();

		return view('pizzas.index',[
			'pizzas' => $pizzas,
		]);
	}
	
	public function show($id){
		
		$pizza = Pizza::findOrFail($id);
		
		return view('pizzas.show',['pizza'=>$pizza]);
	}
	
	public function create(){
		return view('pizzas.create');
	}

	public function store(){
		// request('name');
		$pizzas = new Pizza();

		$pizzas->name = request('name');
		$pizzas->type = request('type');
		$pizzas->base = request('base');
		$pizzas->toppings = request('toppings');
		
		//save() is from Pizza Model(database)
		$pizzas->save();

		return redirect('/')->with('message','Thanks for your order');
	}

	public function destroy($id){
		$pizza = Pizza::findOrFail($id);

		//delete() is from Pizza Model(database)
		$pizza -> delete();
		return redirect('/pizzas');
	}
}
