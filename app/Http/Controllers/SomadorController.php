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
        $this->somador = $somador;
    }
	
    public function getSomas()
    {
		$numero1 = Input::get('numero1');
		$numero2 = Input::get('numero2');	
	
		$this->somador->somar($numero1, $numero2);
		
		$somas = $this->somador->RetornarSomas();
		
        return View::make('somas')->with('array_somas', $somas);
    }	

}
