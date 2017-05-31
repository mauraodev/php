<?php
   $qtd = array(10,5,2);

   if($qtd[0] > $qtd[1] && $qtd[0] > $qtd[2]){
      echo "Entrou no primeiro";
   }elseif($qtd[1] > $qtd[0] && $qtd[1] > $qtd[2]){
      echo "Entrou no segundo";
   }elseif($qtd[2] > $qtd[0] && $qtd[2] > $qtd[1]){
      echo "Entrou no terceiro";
   }else{
      echo "Não entrou em nada";
   }
?>
