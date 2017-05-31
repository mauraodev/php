<?php
include "../Parsedown.php";

$Parsedown = new Parsedown();

echo $Parsedown->text('Hello _Parsedown_!');

echo $Parsedown->text('* Teste');
