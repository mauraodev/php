<?php
require_once 'reader.php';

$env = 'prod';

if ($env == 'dev') {
	//Desenvolvimento
	$mysqli = new mysqli("192.168.0.85", "root", "", "famaseguros_gestaoapolice");
} elseif ($env == 'prod') {
	//Produção
	//$mysqli = new mysqli("fbrudbtriata01.finchsolucoes.com.br", "famaseguros", "A4s8w9S5", "famaseg_gestaoapolice");
}


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('abril.xls');
$dadosArquivo = array(
	"data"		=> $data,
	"planilhas"	=> $data->sheets
);

$cteep    = lerPlanilha(0, $dadosArquivo);
$elektro  = lerPlanilha(1, $dadosArquivo);
$fundacao = lerPlanilhaFundacao(2, $dadosArquivo);

$matriculas = array_merge($cteep, $elektro, $fundacao);

$i = 0;
foreach ($matriculas as $matricula) {

	$sql = "SELECT fga_cliente.id FROM fga_cliente INNER JOIN fga_apolice_grupo ON fga_cliente.id = fga_apolice_grupo.cliente_id WHERE fga_apolice_grupo.des_matricula = " . $matricula['des_matricula'] . " ORDER BY  fga_cliente.id DESC LIMIT 1";

	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {

		$row = $res->fetch_assoc();

		$sqlLancamento = "SELECT fga_apolice_grupo_lancamento.id FROM fga_apolice_grupo_lancamento WHERE convenio_id = 1 AND cliente_id = " . $row['id'] . " AND num_mes = 4 AND num_ano = 2015";

		$resLancamento = $mysqli->query($sqlLancamento);

		if ($resLancamento->num_rows > 0) {
			$rowLancamento = $resLancamento->fetch_assoc();

			$sqlDelete = "DELETE FROM fga_apolice_grupo_lancamento WHERE id = " . $rowLancamento['id'];

			$mysqli->query($sqlDelete);

			$i++;
		} else {
			echo "<pre>";print_r($sql);echo "</pre>";
			echo "<pre>";print_r($sqlLancamento);echo "</pre>";
			die();
		}
	} else {
		echo "<pre>";print_r($sql);echo "</pre>";
		die();
	}


}

echo $i;

function lerPlanilha($planilha, $dadosArquivo)
{
	$arrArquivo    = $dadosArquivo;
	$tuplas        =  $arrArquivo['planilhas'][$planilha]['cells'];

	$arrDados = array();
	foreach ($tuplas as $tupla) {

		if (isset($tupla[1])) {
			if (is_numeric($tupla[1])){
				$arrDados[$tupla[1]] = array('des_matricula' => $tupla[1]);
			}
		}

	}

	return $arrDados;
}
function lerPlanilhaFundacao($planilha, $dadosArquivo)
{
	$arrArquivo    = $dadosArquivo;
	$tuplas        =  $arrArquivo['planilhas'][$planilha]['cells'];

	$arrDados = array();
	foreach ($tuplas as $tupla) {

		if (isset($tupla[2])) {
			if (is_numeric($tupla[2])){
				$arrDados[$tupla[2]. $tupla[3]] = array('des_matricula' => $tupla[2]. $tupla[3]);
			}
		}

	}

	return $arrDados;
}