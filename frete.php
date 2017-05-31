<?php
/**
 *    Exemplo de utilização de utilização de WebService Kinghost
 *    www.kinghost.com.br
 */

$webservice_url     = 'http://webservice.kinghost.net/web_frete.php';
$webservice_query    = array(
    'auth'    => '2254e4e27e9dc69e850ef1cc258bfd78', //Chave de autenticação do WebService - Consultar seu painel de controle
    'formato' => 'query_string', //Valores possíveis: xml, query_string ou javascript
    'tipo'      => 'sedex',         //Tipo de pesquisa: sedex, carta, pac,
    'cep_origem'  => '05451-020',      //CEP de Origem - CEP que irá postar a encomenda
    'cep_destino' => '90560-002',      //CEP de Destino - CEP que irá receber a encomenda
    'mao_propria' => '0', //Serviço adicional - Mão própria (MP), para utilizar valor "S" ou "1"
    'aviso_de_recebimento' => '0', //Serviço adicional - Mão própria (MP), para utilizar valor "S" ou "1"
    'peso'         => 450, //em gr
    'cep'          => '90560-002',      //CEP que será pesquisado
);

//Forma URL
$webservice_url .= '?';
foreach($webservice_query as $get_key => $get_value){
    $webservice_url .= $get_key.'='.urlencode($get_value).'&';
}

parse_str(file_get_contents($webservice_url), $resultado);

switch($resultado['resultado']){  
    case '1':  
        $texto = "<b>Resultado texto</b>: ".$resultado['resultado_txt']." <br>
<b>Valor Float: </b> ".$resultado['valor']." <br>
<b>Valor em Reais: </b> ".$resultado['valor_rs'];  
    break;  
      
    default:  
        $texto = "Fala ao buscar frete: ".$resultado['resultado_txt'];  
    break;  
}

echo $texto;

?> 