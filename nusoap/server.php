<?php

require_once "nusoap.php";

$server = new nusoap_server();

$server->configureWSDL('server', 'urn:server');

$server->wsdl->schemaTargetNamespace = 'urn:server';

//first simple function
$server->register('hello',
            array('username' => 'xsd:string'),  //parameter
            array('return' => 'xsd:string'),  //output
            'urn:server',   //namespace
            'urn:server#helloServer',  //soapaction
            'rpc', // style
            'encoded', // use
            'Just say hello');  //description

//first simple function
$server->register('getprodutos');

//first function implementation
function hello($username)
{
    return 'Howdy, '.$username.'!';
}

function getprodutos()
{
    return 'Howdy';
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

$server->service($HTTP_RAW_POST_DATA);
