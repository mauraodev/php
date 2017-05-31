<?php
	
	function ver($arr){
		
		foreach($arr as $k=>$v){
			
			echo "Campo:".$k."  Valor:".$v."<br>";
		}
	}
	$arr = array();	
	
	$arr[nome]  = "Poly";
	
	ver($arr);
?>
