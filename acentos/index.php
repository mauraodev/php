<?php

   function url_amigavel($string){

      $string    = str_replace(array("á","à","â","ã","ä","ª") ,"a",$string);
      $string    = str_replace(array("Á","À","Â","Ã","Ä") ,"a",$string);

      $string    = str_replace(array("é","è","ê","ë") ,"e",$string);
      $string    = str_replace(array("É","È","Ê","Ë") ,"e",$string);

      $string    = str_replace(array("í","ì","î","ï") ,"i",$string);
      $string    = str_replace(array("Í","Ì","Î","Ï") ,"i",$string);

      $string    = str_replace(array("ó","ò","ô","õ","ö","º") ,"o",$string);
      $string    = str_replace(array("Ó","Ò","Ô","Õ","Ö") ,"o",$string);

      $string    = str_replace(array("ú","ù","û","ü") ,"u",$string);
      $string    = str_replace(array("Ú","Ù","Û","Ü") ,"u",$string);

      $string = str_replace( "Ç", "C", $string);
      $string = str_replace( "ç", "c", $string);

      $string = str_replace( "´", "", $string );
      $string = str_replace( "`", "", $string );
      $string = str_replace( "~", "", $string );
      $string = str_replace( "^", "", $string );
      $string = str_replace( "¨", "", $string );
      $string = str_replace( ",", "", $string );
      $string = str_replace( " ", "-", $string );

      $string = strtolower(utf8_decode($string));

      echo $string;

   }

   echo url_amigavel('ação-bola');
?>
