<?php

    include 'controle/ItemDAO.class.php';

    $obj = new ItemDAO();
    $itens = $obj->Visualizar();

    echo '<pre>';
    print_r($itens);
    echo '</pre>';
?>