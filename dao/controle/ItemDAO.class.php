<?php

    include '/config/Conexao.class.php';
    include '/modelo/Item.class.php';

    class ItemDAO extends Item {

        public function __construct() {
            new Conexao();
        }

        public function Visualizar() {

            $arr = array();

            $query = mysql_query("SELECT id FROM item");

            while ($linha = mysql_fetch_array($query)) {
                $arr[] = $linha['id'];
            }

            return $arr;
        }

        public function Teste(){
            echo 'Teste';
        }

    }

?>
