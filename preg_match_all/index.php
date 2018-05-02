<?php

$re = '/-?[0-9.]{6,}/';
$str = '[location config_id="waweb_17" name="location mauro👊🏻" lat="-22.3595745" long="-49.0524631"]';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
