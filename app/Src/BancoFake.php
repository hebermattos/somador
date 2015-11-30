<?php 

namespace App\Src;

class BancoFake implements IBanco
{
    public function RetornarSomas(){
		return array (7, 3, 5, 9);		
	}
	
    public function SalvarSoma($soma){

	}
}

?> 