<?php
header('Content-type: text/html; charset=UTF-8');
echo ":: Iniciando Robô";

// URL do arquivo
$url = "http://www.estudo.dev/mauro/sample.zip";
$fp = fopen (dirname(__FILE__) . '/sample.zip', 'w+');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 50);
curl_setopt($ch, CURLOPT_FILE, $fp); // write curl response to file
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

curl_exec($ch); // get curl response
curl_close($ch);
fclose($fp);

$zip = new ZipArchive;

$file = dirname(__FILE__) . '/sample.zip';

if ($zip->open($file) === true) {
    $zip->extractTo(dirname(__FILE__));
    $zip->close();

    include_once "do.php";

} else {
    echo "failed";
}

?>
