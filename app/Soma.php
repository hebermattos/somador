<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soma extends Model
{
	protected $fillable = ['resultado'];
   
	protected $casts = [
		'resultado' => 'decimal',
	];
	
}
