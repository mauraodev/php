<?php 
//$conn = oci_connect('system', 'abcd12', '192.168.0.20:1521/xe');
$conn = oci_connect('tangerw', 'tgsnil', '200.178.181.179:22101/tgweb');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>