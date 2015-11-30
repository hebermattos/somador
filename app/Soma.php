<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soma extends Model
{
	public function __construct($resultado = null, array $attributes = array())
    {		
        $this->resultado = $resultado;

		parent::__construct($attributes);
    }
	
	protected $fillable = ['resultado'];
   
	protected $casts = [
		'resultado' => 'decimal',
	];
	
}
