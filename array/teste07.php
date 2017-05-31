<?php
    $a = array();
    $a['nome'] = 'Polly';
    $a['sobrenome'] = "Nunes";

    $valores = null;
    $campos = null;
    
    foreach($a as $k=>$v){
        $campos .= $k . ",";
        $valores .= "'" . $v ."',";
    }

    $campos = substr($campos,0,-1);
    $valores = substr($valores,0,-1);

    echo "SELECT * FROM CADATRO".$campos."VAlUES (".$valores.")";
?>
