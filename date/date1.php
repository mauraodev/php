<?php

	date_default_timezone_set("America/Sao_Paulo");
	setlocale(LC_ALL, 'pt_BR');

	echo "Data Atual: ".$data_atual = date("w H:i")."<br/>";
	echo "Data Regra: ".$data_regra = "4 21:00"."<br/>";
	
	if($data_atual < $data_regra){

		echo "Valido";
	
	}else{
	
		echo "Invalido";
		
	}

	/*strtotime(2012-07-05);
	date("w",$data);*/
	
?>