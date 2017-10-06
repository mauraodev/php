<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo ":: SOAP - Algar\n";

$wsdl  = './ManageProductInformation.wsdl';

$aHTTP = [];
$aHTTP['http']['header'].= "client_id: 996b13cc-d634-3ab9-a20c-052e277f8ae3\r\n"."access_token: 4b755cd6-a027-3656-9ae6-11dc9a3d2a8a\r\n";

$context = stream_context_create($aHTTP);

$options = [
    'trace'      => 1,
    'exceptions' => true,
    'cache_wsdl' => WSDL_CACHE_NONE,
    "stream_context" => $context
];

$client = new SoapClient($wsdl, $options);
$client->__setLocation('https://api-algar.sensedia.com/algar-telecom/product-management/product-information/v1/queryassets');

$data = [[
	'CustomerAccount' => [
       'CustomerForCustomerAccount'=> [
           'Individual' => [
               'IndividualIdentification' => [
                   'documentNumber' => '11724074601'
               ]  
           ]
       ]
   ],
  'StandardHeader' => [
       'ServiceAddressing' => [
           'from' => 'ASC_SAC',
           'to'   => 'TODOS'
       ]
   ]
]];

$result = $client->__soapCall("queryassets", $data, NULL);

echo "<pre>".print_r($result, true)."</pre>"; 
