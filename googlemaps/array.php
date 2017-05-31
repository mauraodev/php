<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   //Arrays
   $arr1 = array(1,2,3,4,5,6);
   $arr2 = array(1,2,3,4,5,6,7,8,9,10,11);
   $arr3 = 0;
   $arr = maiorArray($arr1,$arr2);
   
   if($arr > 10){
      echo "O número é maior que 10";
   }else{
      echo "O número é menor que 10";
   }
   
   function maiorArray($arr1,$arr2,$arr3){
      //Conta a quantidade de elementos no array
      $arr1 = count($arr1);
      $arr2 = count($arr2);
      $arr3 = count($arr3);
            
      //Verifica qual e o maior número
      if($arr1 > $arr2 && $arr1 > $arr3){
         return $arr1;   
      }else if($arr2 > $arr1 && $arr2 > $arr3){
         return $arr2;
      }else{
         return $arr3;
      }
   }
?>
