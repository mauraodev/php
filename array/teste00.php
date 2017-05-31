<?php

    $string = "t.este";
    
    $string_parte = explode(".",$string);
    

    foreach($string_parte as $String){
    
        print_r($string);
        echo "<br/>";
    }
    
    
    $array = array();
    
    $array[1] = "2";
    $array[2] = "4";
    $array[3] = "6";
    
    print_r($array);
    
    foreach($array as $i=>$value){
    	
        echo $array[$i];
    }
    print_r($array);

?>