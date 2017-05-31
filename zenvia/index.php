<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-rest.zenvia360.com.br/services/send-sms-multiple');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$sms = array();
$sms['sendSmsMultiRequest']['aggregateId'] = "7718";
$sms['sendSmsMultiRequest']['sendSmsRequestList'][] = array(
    "from" => "Triata",
    "to" => "551496866649",
    "msg" => "Teste de Mensagem",
    "callbackOption" => "FINAL",
    "id" => "010",
);

$sms['sendSmsMultiRequest']['sendSmsRequestList'][] = array(
    "from" => "Triata",
    "to" => "5514998525177",
    "msg" => "Teste de Mensagem",
    "callbackOption" => "FINAL",
    "id" => "011",
);

//echo "<pre>"; print_r($sms); echo "</pre>"; exit();

$sms_encode = json_encode($sms);

curl_setopt($ch, CURLOPT_POSTFIELDS, $sms_encode);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Basic ZW5nYWdlLnRyaWF0YTpGY3BKV2tjWUMy',
    'Accept: application/json'
));

$response = curl_exec($ch);
$error = curl_error($ch);

curl_close($ch);

var_dump($response);

var_dump($error);
