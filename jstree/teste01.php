<?php 

function getPastas($caminho)
{

    if (is_dir($caminho)) {

        $pastas = new DirectoryIterator($caminho);

        foreach ($pastas as $pasta) {

            if ($pasta->isDir() && $pasta->isDot() == false) {

                echo $pasta->getFileName();

                getPastas($pasta->getPathname());

            }

        }

    }
    
}

$caminho = dirname(__FILE__);

getPastas($caminho);

?>