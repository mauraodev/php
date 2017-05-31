<?php
  
  $par1 = 0;
  $par2  = 10;
  testaParametros($par1,$par2);
  
  function testaParametros($par1,$par2 = 0){
     echo $par1;
     echo $par2;
  }
?>
