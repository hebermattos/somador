<?php 

namespace App\Src;

use App\Soma;

class Banco implements IBanco
{
    public function RetornarSomas(){		
		return Soma::all();			
	}
	
    public function SalvarSoma($valor){		
		$soma = new Soma;
		$soma->resultado = $valor;
		$soma->save();		
	}
}

?> 