<?php

$filetype = ".jpg";

$dir = "../../marciamichelan/site/public/upload/projeto/casamento/aline-augusto/";

$abrir = opendir($dir);

while ($file = readdir($abrir)) {

    //verifica se a extenção do arquivo é a mesma da variável
    if (substr(strtolower($file),-4) == $filetype) {

        rename($dir . $file, strtolower($dir . $file));

        //se for exibe o nome do arquivo
        echo '/upload/projeto/casamento/aline-augusto/' . strtolower($file) .',';
    }
    
}

?>