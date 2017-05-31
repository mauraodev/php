<?php

if ($_FILES["file"]["error"] > 0) {
    echo "Erro: " . $_FILES["file"]["error"] . "<br>";
} else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Tipo: " . $_FILES["file"]["type"] . "<br>";
    echo "Tamanho: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Armazenado em: " . $_FILES["file"]["tmp_name"] . "</br>";
    echo "Move o Arquivo: " . move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
}