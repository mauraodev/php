<?php

$arrUsuarioVisualizados = array(array('codintranet_restritousuario' => 1), array('codintranet_restritousuario' => 2));

$arrUsuario = array(array('codintranet_restritousuario' => 1));

$result = array_udiff($arrUsuarioVisualizados, $arrUsuario);

//echo "<pre>";print_r($result);echo "</pre>";
