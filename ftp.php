<?php 

// Dados para conectar no FTP
$ftp_server = "177.70.107.229";
$ftp_user   = "triatacombr";
$ftp_pass   = "91dKhm!5";

// Conecta no FTP
$conn_id = ftp_connect($ftp_server) or die("Não foi possível conectar ao servidor de instalação");

if (!@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
    throw new Exception("Não foi possível conectar", 1);
}

$remote_dir = '/modulo.triata.com.br/conteudo';

if (ftp_chdir($conn_id, $remote_dir) == false) {
    throw new Exception("Erro ao mudar diretorio: {{$remote_dir}}", 1);
}

$contents = ftp_nlist($conn_id, ".");

echo 'Diretório<pre>';
print_r($contents);
echo '</pre>';