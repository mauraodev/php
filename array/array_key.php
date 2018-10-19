<?php

$arr = [0 => 'Mauro', 1 => 'Lucas', 2 => 'João', 3 => 'Pedro'];
$need = [0, 2];
$nArr = [];

print_r($arr[0]);

foreach ($need as $key) {
    $nArr[] = $arr[$key];
}

print_r($nArr);
