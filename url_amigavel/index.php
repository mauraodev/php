<?php
    //URL Amigavel
    $atual = (isset($_GET['pg'])) ? $_GET['pg'] : 'home';
    
    $atual = explode('/', $atual);
    print_r($atual);
    include $atual[0].'.php';
?>

  