<?php 

namespace App\Src;

use App\Soma;

class BancoFake implements IBanco
{
    public function RetornarSomas(){
		return array (new Soma(3), new Soma(7), new Soma(2), new Soma(5));		
	}
	
    public function SalvarSoma($soma){

	}
}

?> 