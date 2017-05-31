<?php
require_once 'Google/Client.php';
require_once 'Google/Service/Analytics.php';

$client = new Google_Client();

$key = file_get_contents('key.p12');

//$client->setDeveloperKey($key);

$cred = new Google_Auth_AssertionCredentials(
    '691037500218-fvp69j63ntsbqriajhs54f94avoisppu@developer.gserviceaccount.com',
    array('https://www.googleapis.com/auth/analytics'),
    $key
);

$client->setAssertionCredentials($cred);

if($client->getAuth()->isAccessTokenExpired()) {
   $client->getAuth()->refreshTokenWithAssertion($cred);
}

$_SESSION['google_service_token'] = $client->getAccessToken();
$Analytics = new Google_Service_Analytics($client);

echo "<pre>";print_r($Analytics);echo "</pre>";