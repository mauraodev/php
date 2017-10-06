<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$date_now = "2017-09-20";
$date = "2017-09-10";

$interval = date_diff($date_now, $date);

echo "<pre>"; print_r($interval->format('%R%a')); echo "</pre>";
