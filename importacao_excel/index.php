<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once 'PHPExcel.php';
require_once 'PHPExcel/IOFactory.php';

if (!file_exists("importacao.xlsx")) {
    exit("Arquivo não existe." . EOL);
}

$objPHPExcel = PHPExcel_IOFactory::load("importacao.xlsx");

$arrRow = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

$conexao = mysqli_connect('localhost', 'root', '', 'php');

foreach ($arrRow as $row) {

    $sqlUF = "SELECT codappestado FROM appestado WHERE dessigla = '" . $row['A'] . "'";

    $resultUF = mysqli_query($conexao, $sqlUF);

    $rowUF = mysqli_fetch_row($resultUF);

    $sqlCity = "SELECT codappcidade FROM appcidade WHERE desnome LIKE '" . addslashes($row['B']) . "'";

    $resultCity = mysqli_query($conexao, $sqlCity);

    $rowCity = mysqli_fetch_row($resultCity);

    if ($rowCity[0] != '') {

        echo $sqlIns = "INSERT INTO unidade_gerente (codappidioma, codappempresa, codappestado, codappcidade, desnome, fontelefone) VALUES (1, 1, " . $rowUF[0] . ", " . $rowCity[0] . ", '" . utf8_decode($row['C']) . "' , '" . $row['D'] . "')";

        echo '<br/>';

        mysqli_query($conexao, $sqlIns);
    } else {

        echo $sqlInsCity = "INSERT INTO appcidade (codappestado, desnome) VALUES (" . $rowUF['0'] . ", '" . utf8_decode($row['B']) . "')";

        echo '<br/>';

        mysqli_query($conexao, $sqlInsCity);

        $sqlCity = "SELECT codappcidade FROM appcidade WHERE desnome LIKE '%" . addslashes($row['B']) . "%'";

        $resultCity = mysqli_query($conexao, $sqlCity);

        $rowCity = mysqli_fetch_row($resultCity);

        echo $sqlIns = "INSERT INTO unidade_gerente (codappidioma, codappempresa, codappestado, codappcidade, desnome, fontelefone) VALUES (1, 1, " . $rowUF[0] . ", " . $rowCity[0] . ", '" . utf8_decode($row['C']) . "' , '" . $row['D'] . "')";

        echo '<br/>';

        mysqli_query($conexao, $sqlIns);
    }
}
?>