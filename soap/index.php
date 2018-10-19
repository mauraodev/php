<?php

$url = "";

$params = [
    'trace' => 1,
    'exception' => true
];

try {
    $client = new SoapClient($url, $params);
} catch (SoapFaul $e) {
    echo "<pre>";
    print_r($e->getMesssage());
    echo "</pre>";
}
