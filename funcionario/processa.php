<?php

include 'funcionario.php';


$objFuncionario = new Funcionario('Mauro', '1000');
$objFuncionario = new Funcionario('Poli', '1000');

$arrSalario = $objFuncionario->getLista();

echo "<pre>";
print_r($arrSalario);
echo "</pre>";