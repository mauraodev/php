<?php

   $string = array(7,0,1,2,0,3,0,4,2,3,0,3,2,1,2,0,1,7,0,1);
   $quadro = array(0,0,0);

   $a = 0;
   $b = 0;
   $c = 0;

   for($j=0; $j<count($string); $j++){

      for($s=$j; $s<count($string); $s++){
      
         if($a == 0){
            $quadro[0] = $string[$j];
            $a++;
            $j++;
         }
         if($b == 0){
            $quadro[1] = $string[$j];
            $b++;
            $j++;
         }
         
         if($c == 0){
            $quadro[2] = $string[$j];
            $c++;
            $j++;
         }
         
      }

   }

   
   for($k=0; $k<3; $k++){
      echo $quadro[$k];
   }
?>
