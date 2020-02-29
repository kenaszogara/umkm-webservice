<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	// default value for table
	protected $attributes = [
		'profile' => '',
	];
	
	// which column can be filled from form
	protected $fillable = [
		'name', 
		'phone_number',
		'email',
		'address',
		'gender',
		'birth_date'
	];
}
