<?php 

   header('Content-Type: text/html; charset=utf-8');

   $xml = simplexml_load_file("livros.xml");

   foreach ($xml as $key => $value) {
       
        if ($key == 'categorias') {

        }

        if ($key == 'marcas') {

        }

        if ($key == 'temas') {

        }

        if ($key == 'produtos') {
            
        }

   }

?>