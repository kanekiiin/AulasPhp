<?php 
	function somatorio($valor=int){
    	$retorno = 0;
    	for ($i=1; $i < $valor+1; $i++) { 
	    		$retorno= $retorno +$i;
	  	}
		return $retorno;
	}
	$anjo="[Informe seus dados primeiro]";
	if (empty($_GET)===false) {
	    $diaNascimento = $_GET['diaNascimento'];
	    $mesNascimento = $_GET['mesNascimento'];
	    $anoNascimento = $_GET['anoNascimento'];
	    $v1 = $anoNascimento / 100;
	    $v2 = 50 - $diaNascimento;
	    $safadeza = somatorio($mesNascimento) + $v1 * $v2;

	    $anjo = 100 - $safadeza;
	    }

	require 'Atividade4.php';
	    //$safadeza= int;

	//$safadeza = somatorio(mes) + (ano/100) * (50-dia)
 
?>