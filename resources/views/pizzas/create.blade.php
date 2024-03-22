@extends('layouts.layout')

@section('content')
	<div class="wrapper create-pizza">
		<h1>Create a new Pizaa</h1>
		<form action="/pizzas" method="POST">
			@csrf
			<label for="name">Your Name: </label>
			<input id="name" name="name">
			
			<label for="type">Choose pizza type: </label>
			<select name="type" id="type">
				<option value="margarita">Margarita</option>
				<option value="hawaiian">Hawaiian</option>
				<option value="veg supreme">Veg Supreme</option>
				<option value="volcano">Volcano</option>
			</select>
			
			<label for="base">Base: </label>
			<select name="base" id="base">
				<option value="cheesy crust">Cheesy crust</option>
				<option value="garlic crust">Garlic crust</option>
				<option value="thin & crispy">Thin & Crispy</option>
				<option value="thick">Thick</option>
			</select>
			
			<input type="submit" value="Orde Pizza">
		</form>
	</div>
@endsection