<?
require_once( 'http.inc.php' );
$http_client = new http( HTTP_V11, false);
$http_client->host = 'triata.com.br';
$form = array();
$envio = $http_client->post( '/ext/ok.php', $form);
if ( $envio == HTTP_STATUS_OK)  {
	$retorno = trim($http_client->get_response_body());
	echo "Consegui conectar a outro servidor, a resposta foi: [$retorno]";
}
else  {
	echo "Não consegui fazer um POST via http para outro servidor. Resposta: [$envio]";
}
?>