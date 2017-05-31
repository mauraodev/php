<?php

$ch          = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://upload.wikimedia.org/wikipedia/en/a/a9/Example.jpg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSLVERSION,3);

$data        = curl_exec ($ch);
$error       = curl_error($ch);

curl_close ($ch);

$destination = __DIR__;
$file        = fopen($destination, "w+");
fputs($file, $data);
fclose($file);

?>
