<?php
   $mes = array(
      "0"=>"janeiro",
      "1"=>"feveiro",
      "2"=>"marco",
      "3"=>"abril",
      "4"=>"maio",
      "5"=>"junho",
      "6"=>"julho",
      "7"=>"agosto",
      "8"=>"setembro",
      "9"=>"outubro",
      "10"=>"novembro",
      "11"=>"dezembro"
      );

   for($i=1; $i<count($mes); $i++){
      if($i <= count($mes)){
         $cont = $i-count($mes);
      }else{
         $cont = $i;
      }
      
      echo $mes[$cont]." ";
   }
?>