<?php

    /**
     * Description of Conexao
     *
     * @author Maurão
     */
    class Conexao {

        public function __construct() {
            $conexao = mysql_connect('localhost','root','key1451');
            mysql_select_db('php',$conexao) or die (mysql_error());
        }

    }

?>
