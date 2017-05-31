<?php

/*$servidor = new SoapServer(null,array("uri" => "http://local.php/webservice"));

function olamundo($nome)
{

  return "Ola " . $nome;

}

$servidor->addFunction("olamundo");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $servidor->handle();

} else {

  $funcoes = $servidor->getFunctions();
  foreach($funcoes as $funcao){

     echo $funcao."<br/>";

  }

}*/

class UserFacade {

    public function getUser()
    {
        $sName = 'Meu Nome';
        $sName .= ' Meu Sobrenome';

        return $sName;
    }

}

$server = new SoapServer('service.wsdl');
$server->setClass('UserFacade');
$server->handle();
