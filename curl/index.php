<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://httpbin.org/ip');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$result = curl_exec($ch);
$error = curl_error($ch);

if (!empty($error)) {
    echo "<pre>"; print_r($error); echo "</pre>"; exit();
}

echo "<pre>"; print_r(json_decode($result)); echo "</pre>"; exit();
