<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use View;
use App\Soma;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Src\ISomador;

class SomadorController extends Controller
{
	protected $somador;
	
	public function __construct(ISomador $somador)
    {
		if($somador == null)
			throw "somador não pode ser nulo";
		
        $this->somador = $somador;
    }
	
    public function getSoma()
    {
		$numero1 = Input::get('numero1');
		$numero2 = Input::get('numero2');	
	
		$soma = $this->somador->somar($numero1, $numero2);
		
        return View::make('soma')->with('resultado', $soma);
    }
	
	public function getSomas()
    {		
		$somas = $this->somador->RetornarSomas();
	
        return View::make('somas')->with('somas', $somas);
    }
}
