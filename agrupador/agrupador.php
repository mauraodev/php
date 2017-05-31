<?php

    $conexao = mysql_connect('locahost', 'root', 'key1451');

    mysql_select_db('php', $conexao);

    $sql = 'SELECT pedido.cod_fornecedor, pedido.`data`, pedido_x_item.item_cod,pedido_x_item.descricao,pedido_x_item.qtd FROM pedido INNER JOIN pedido_x_item ON pedido.num_pedido = pedido_x_item.item_cod';

    $linha = mysql_query($sql);

    $primeiro = mysql_fetch_row($linha);

    echo '<pre>';
    print_r($primeiro);
    echo '</pre>';

    while ($row = mysql_fetch_array($sql)) {

    }
?>
