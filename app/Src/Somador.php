<?php 

namespace App\Src;

class Somador implements ISomador {   
    
	protected $banco;	
	
	public function __construct(IBanco $banco){			
        $this->banco = $banco;
    }
	
    function Somar($numero1,$numero2) {
		$soma = $numero1 + $numero2;		
		$this->banco->SalvarSoma($soma);		
		return $soma; 
    }	
	
	function RetornarSomas() { 	
		return $this->banco->RetornarSomas();		
    }	
} 
?> 