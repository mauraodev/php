<?php

    $atual = $_GET['pg'];
    $atual = explode('/',$atual);

    include 'basecontroller.php';
    
    $obj = new BaseController($atual[0],$atual[1]);
    
   

?>