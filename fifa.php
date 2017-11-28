<?php
$times = ['Cor', 'Pal', 'São'];
$jogadores = ['Taka', 'Giba', 'Arl'];

$times = array_rand($times);
$jogadores = array_rand($jogadores);

$result = array_merge($times, $jogadores);

echo "<pre>";
print_r($times);
echo "</pre>";
