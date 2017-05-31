<?php

    $logradouros = array('Rua1','Rua2','Rua4');

    $itinerarios = array('Rua3','Rua4','Rua2');

    foreach($logradouros as $Logradouro){
    }
    
    foreach($itinerarios as $Itinerario){

        if($Logradouro == $Itinerario){
            echo "<p>Exite a ".$Itinerario." em logradouro</p>";
        }

        if($Logradouro != $Itinerario){
            echo "<p>A ".$Itinerario." nao existe</p>";
        }
        //echo "<p>Logradouro:".$Logradouro."</p>";
        //echo "Itinerario:".$Itinerario."</p>";


    }

?>
