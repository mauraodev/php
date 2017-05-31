<?php
set_time_limit(0);

$url = 'http://www.colorado.edu/conflict/peace/download/peace.zip';

$fp = fopen (dirname(__FILE__) . '/test.zip', 'w+');//This is the file where we save the    information
$ch = curl_init(str_replace(" ","%20",$url));//Here is the file we are downloading, replace spaces with %20
curl_setopt($ch, CURLOPT_TIMEOUT, 50);
curl_setopt($ch, CURLOPT_FILE, $fp); // write curl response to file
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_exec($ch); // get curl response
curl_close($ch);

$zip = new ZipArchive;
$res = $zip->open(dirname(__FILE__) . '/test.zip');
if ($res === TRUE) {
    $zip->extractTo(dirname(__FILE__));
    $zip->close();
    echo 'woot!';
} else {
  echo 'doh!';
}


fclose($fp);


?>
