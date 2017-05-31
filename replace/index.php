<?php

    $conexao = mysql_connect("localhost","root","key1451");
    mysql_select_db("php",$conexao);
    
    $arr = array(
        "e" => "E",
        "a" => "A"
    );
    
    foreach($arr as $k=>$v){
        
        $query = "UPDATE usuario SET  usuario = REPLACE(usuario,'".$k."','".$v."') ";
        
        mysql_query($query);
        
    }
        
?>
