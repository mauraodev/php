<?php

   $cont = 0;

   $a = 0;
   $b = 0;
   $c = 0;

   $string = array(7,0,1,2,0,3,0,4,2,3,0,3,2,1,2,0,1,7,0,1);
   $quadro = array();
   $qtd = array(1,1,1);

   for($i=0; $i<count($string); $i++){

      if(count($quadro) < 3){

         $quadro[$cont] = $string[$i];
         $qtd[$cont];
         $cont++;
            
         

      }elseif($quadro[0] == $string[$i]){
         $quadro[0] = $string[$i];
         $qtd[0]++;

      }elseif($quadro[1] == $string[$i]){
         $quadro[1] = $string[$i];
         $qtd[1]++;

      }elseif($quadro[2] == $string[$i]){
         $quadro[2] = $string[$i];
         $qtd[2]++;

      }elseif($qtd[0] > $qtd[1] && $qtd[0] > $qtd[2]){
         $quadro[0] = $string[$i];
         $qtd[0]++;

      }elseif($qtd[1] > $qtd[0] && $qtd[1] > $qtd[2]){
         $quadro[1] = $string[$i];
         $qtd[1]++;

      }else{
         $quadro[2] = $string[$i];
         $qtd[2]++;
      }


      echo "<div>";
      echo "<ul style='float:left; list-style:none'><li>";
      for($t=0; $t < count($quadro); $t++){
         echo $quadro[$t]."<br/>";
      }
      echo "</li></ul>";
      echo "</div>";
   }   

   echo "<img src='fifo.jpg' alt='fifo'/>";              

?>
