<?php

if (preg_match("/(\d{2})(\d{5})(\d{4})/", "21980695899", $matches)) {
    $result = '(' . $matches[1] . ')' . $matches[2] . '-' . $matches[3];
    echo $result;
}
