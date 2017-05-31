<?php

set_time_limit(0);


$base = 'img';

function listaPasta($base) {

    $con = mysql_connect('localhost','root','');

    mysql_select_db('belascurvas', $con);

    $nova_base = 'conve';

    if (is_dir($base)) {

        $iterator = new DirectoryIterator($base);

        $i = 0;

        $date = date('d-m-Y H:i');

        foreach ($iterator as $fileinfo) {  

            if ($fileinfo->isDot() == false) {         

                $date = date('Y-m-d H:i:s', strtotime('+1 hour', strtotime($date)));

                $novo_nome = 'belascurvas' . str_replace('-','',str_replace(':', '', str_replace(' ', '', $date))) . '.jpg';

                echo $query = "INSERT INTO post (post.desnome, post.txtdescricao, post.glrgaleria, post.datdata) VALUES ('Belas', 'Belas', '{\"imagem\":\"" . $novo_nome . "\"}', '". $date ."') ";

                mysql_query($query);

                rename($base."\\".$fileinfo->getFileName(), strtolower($nova_base ."\\". $novo_nome));            
            }

            $i++;            
        }
    }

}
 
listaPasta($base); 

?>