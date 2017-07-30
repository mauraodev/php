<?php

$arr['pizza'] = array();
$arr['total'] = 0;

$massa = 'Massa: Tradiconal';
$grupo = 1;
$tipo = 'Calzoni';
$preco = 10.00;

array_push($arr['pizza'], $massa);
array_push($arr['pizza'], $grupo);
array_push($arr['pizza'], $tipo);
$arr['total'] = $arr['total'] + $preco;

array_push($arr['pizza'], $massa);
array_push($arr['pizza'], $grupo);
array_push($arr['pizza'], $tipo);
$arr['total'] = $arr['total'] + $preco;

echo "<pre>"; 
print_r($arr);
echo "</pre>";
exit();