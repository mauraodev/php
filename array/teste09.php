<?php
    $str = "Hello Friend";

    $arr1 = str_split($str);


    function LeTres($arr1){
        for($i=0; $i<3; $i++){
            print_r($arr1[$i]); 
        }
        echo"<br/>";
    }
    
    function LeTres2($arr1){
        for($i=1; $i<4; $i++){
            print_r($arr1[$i]);
        }
        echo"<br/>";
    }
    
    function RemovePrimeiro($arr1){
        unset($arr1[1]);
        
    }
    
    Letres($arr1);
    RemovePrimeiro($arr1);
    Letres2($arr1);

?>
