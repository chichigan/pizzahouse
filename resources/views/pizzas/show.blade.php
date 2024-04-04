@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">     
	<h1>Order for {{$pizza->name}}</h1>
	<p class="type">Type - {{$pizza->type}}</p>
	<p class="base">Base - {{$pizza->base}}</p>
	<p class="toppings">Extra toppings</p>
	<ul>
		@foreach($pizza->toppings as $topping)
			<li>{{ $topping }}</li>
		@endforeach
	</ul>
	
	<!-- Delete the pizzas order -->
	<!-- <form action="/pizzas/{{ $pizza->id }}" method="POST"> -->
	
	<!-- action is named routed in web.php -->
	<form action="{{ route('pizzas.destroy',$pizza->id) }}" method="POST">
		<!-- Change method to DELETE so the route can indentify to delete route in web.php -->
		@csrf
		@method('DELETE')
		<button>Complete Order</button>
	</form>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection