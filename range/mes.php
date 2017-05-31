<?php

function getMeses($data_inicial, $data_final)
{
	$inicial    = strtotime($data_inicial);
	$final      = strtotime($data_final);

	$mesInicial = date('mY', $inicial);
	$mesFinal   = date('mY', $final);

	$anoInicial = date('Y', $inicial);
	$anoFinal   = date('Y', $final);

	$anos = range($anoInicial, $anoFinal);

	foreach ($anos as $ano) {
		$meses[$ano] = array();

		while ($inicial < $final){

			if (date('Y', $inicial) == $ano) {
				$meses[$ano][] = date('m', $inicial);
				$inicial = strtotime(date('Y-m-d', $inicial) .' +1 month');
			} else {
				break;
			}

		}

	}

	return $meses;
}

$meses = getMeses('2015-01-01', '2015-12-01');

echo "<pre>";print_r($meses);echo "</pre>";