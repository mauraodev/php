<?php

$periodo_minimo = 30;
$periodo_maximo = 60;

$to_time   = '00:30:00';
$from_time = '00:60:00';

$time = horaMinuto($from_time) - horaMinuto($to_time);

// Verificações para o dia inteiro
if ($periodo_minimo == 1440 && $periodo_minimo == 1440) {

    if ($time == 0) {
        return "True";
    } else {
        return "False";
    }

} else {

    if ($time >= $periodo_minimo && $time <= $periodo_maximo) {
        echo "True";
    } else {
        echo "False";
    }

}




function horaMinuto($time)
{

    list($hour, $minute, $second) = explode(':', $time);

    $hour = $hour * 60;

    return $hour + $minute;
}
