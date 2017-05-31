<?php
  
  $array = array();
  $max = 3;
  
  
  function AdionaElemento($elemento, $max,$array){
    if(count($array) == $max){
        echo "Array Cheio";
    }else{
        echo "Adiciona elemento ".$elemento;
        $array[3] = $elemento;
    }
  }
  
  function Mostra($array,$max){
    foreach($array as $Arr){
        echo $Arr;
    }
  }
  
  AdionaElemento(3,$max,$array);
  Mostra($array,$max);
?>
