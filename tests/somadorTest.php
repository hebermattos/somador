<?php

use App\Src\ISomador;
use App\Src\Somador;
use App\Src\IBanco;
use App\Src\BancoFake;

class SomadorTest extends PHPUnit_Framework_TestCase
{    
	public function numeros()
    {
        return array(
          array(0, 0, 0),
          array(3, 5, 8),
          array(-3, 7, 4),
          array(-1, -4, -5)
        );
    }

	/**
	 * @test
     * @dataProvider numeros
     */
    public function somar_dois_numeros($numero1,$numero2,$resultado)
    {
		$banco = new BancoFake();		
        $somador = new Somador($banco);

        $this->assertEquals($resultado, $somador->Somar($numero1, $numero2));
    }	

}
?>