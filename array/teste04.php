<?php

	//Array
	$arr = array(1=> "Mauro", 2=> "Poly");
	
	foreach($arr as $item){
		echo $item."<br/>";
	}
	
	echo "<p>Apagando um elemento da \"Array\"</p>";
	
	unset($arr[1]);
	
	foreach($arr as $item){
		echo $item."<br/>";
	}
?>