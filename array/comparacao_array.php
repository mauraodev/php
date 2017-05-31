<?php

    //Base de comparação
    $arrA = array(
        array(
            'tabela' => 'sis_usuario'
        ),
        array(
            'tabela' => 'sis_usuario_x_grupo'
        ),
        array(
            'tabela' => 'sis_usuario_x_acesso'
        ),
        array(
            'tabela' => 'sis_usuario_x_menu'
        ),
    );

    //Base para verificar
    $arrB = array(
        array(
            'tabela' => 'sis_usuario'
        ),
        array(
            'tabela' => 'sis_usuario_x_acesso'
        ),
        array(
            'tabela' => 'sis_usuario_x_menu'
        ),
    );

    for ($i = 0; $i <= 3; $i++) {

        if ($arrA[$i] != $arrB[$i]) {

            echo $arrA[$i]['tabela'] . "<br/>";
        }
    }
?>
