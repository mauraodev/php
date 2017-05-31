<?php

ini_set("soap.wsdl_cache_enabled", "0");

/*$cliente = new SoapClient(null, array('location'=>'http://local.php/webservice/server.php','uri'=>'http://local.php/webservice/','trace'=>1));

$resultado = $cliente->olamundo('Mauro');

print($resultado);*/

$client = new SoapClient('http://local.php/webservice/server.php?wsdl');

echo '<pre>';
print_r($client->getUser());
echo '</pre>';
die();

?>
