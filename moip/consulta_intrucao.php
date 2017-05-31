<?php

$credentials = 'LACHQRE3DTGNIFVHHXGJXQY2FIAYABHYBAYK6KL8' . ':' . 'D43WW9LUIPSUJZFHEWZRI6WKHP3OJIEA';

$header[] = "Expect:";
$header[] = "Authorization: Basic " . base64_encode($credentials);

$url = 'https://desenvolvedor.moip.com.br/sandbox/ws/alpha/ConsultarInstrucao/82R0L1L6N0Y3Z0B1M1G1T5X6L3Z3S5D5N0O0V0W0S040W1C168U6F4B0J5D3';

$ch = curl_init();
$options = array(CURLOPT_URL => $url,
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSLVERSION => 1
);

curl_setopt_array($ch, $options);
$ret = curl_exec($ch);
$err = curl_error($ch);
$info = curl_getinfo($ch);
curl_close($ch);

echo 'Info: <pre>';
print_r($info);
echo '</pre>';

echo 'Ret: <pre>';
var_dump($ret);
echo '</pre>';

?>
