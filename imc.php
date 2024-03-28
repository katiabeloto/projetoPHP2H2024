<?php 

	$nome = "Joaquina";
	$peso = 64;
	$altura = 1.66;


	function imc ($peso,$altura){
		$imc = $peso / ($altura * $altura);

		return $imc;
	}

	$resp = imc($peso,$altura);

	if ($resp <= 18.5) {
		echo "Abaixo do peso. <br />";
	}
	elseif ($resp >= 18.6 && $resp <= 24.9){
		echo "Peso ideal (parabéns)";
	}
	elseif ($resp >=25.0 && $resp <= 29.9)
		{
		echo "Levemente acima do peso";	
	}
	elseif ($resp >= 30.0 && $resp <= 34.9){
		echo "Obesidade grau I";
	}

	elseif ($resp >= 35.0 && $resp <= 39.9){
		echo "Obesidade grau II (severa)";
	}
	elseif ($resp > 40.0 ){
		echo "Obesidade grau III (mórbida)";
	}

 ?>