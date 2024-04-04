<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
	//The plural name of the class(Pizza) will be considered as the table name(pizzas table)
	
	//Manually specify the table name,if table name is 'pizzasss'
	//protected $table='pizzasss';
	
    protected $casts = [
        'toppings' => 'array'
    ];
}
