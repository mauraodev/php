<?php

$json = "{'teste': ''}";
$decode = json_decode($json, true);

if (!empty($decode['teste'])) {
    echo "HueBR";
} else {
    echo "Vazio";
}
