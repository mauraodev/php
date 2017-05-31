<?php

$mysqli = mysqli_connect('localhost','root','','php');

if (mysqli_connect_error()) {
    die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
    exit();
}

$sql = $mysqli->prepare("SELECT * FROM usuario");

$sql->execute();

while($sql->fetch()) {
    ?>
    
    <?php
}
?>