<?php
    $a = array();
    $a['nome'] = 'Polly';
    $a['sobrenome'] = "Nunes";

    foreach($a as $k=>$v){
        //echo "<strong>Campo: </strong>".$k."<strong>Valor: </strong>".$v."<br/>";
        $campo .= $k;
        $valor .= $v;
    }
    
    $campo = substr($campo, 0, -1);
    $valor = substr($valor, 0, -1);
    echo $campo , $valor;
    
?>