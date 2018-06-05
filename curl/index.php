<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://httpbin.org/ip');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

$result = curl_exec($ch);
$error = curl_error($ch);

if (!empty($error)) {
    echo "<pre>";
    print_r($error);
    echo "</pre>";
}
