<?php

$inicio = "20:00:01";
$fim = "21:00:01";

$restrito = array(
    array(
        'inicio' => '00:00:00',
        'fim' => '09:00:00'
    ),
    array(
        'inicio' => '21:00:02',
        'fim' => '23:59:59'
    )
);

foreach ($restrito as $row) {


    if (strtotime($inicio) > strtotime($row['inicio']) && strtotime($inicio) < strtotime($row['fim'])) {
        echo "Inicio: " . $row['inicio'];
    }

    if (strtotime($fim) > strtotime($row['inicio']) && strtotime($fim) < strtotime($row['fim'])) {
        echo "Fim: " . $row['inicio'];
    }

}

?>
