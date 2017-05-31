<?php

    $string = array(7, 0, 1, 2, 0, 3, 0, 4, 2, 3, 0, 3, 2, 1, 2, 0, 1, 7, 0, 1);
    $quadro = array();

    $cont = 0;
    $a = 0;
    $b = 0;
    $c = 0;

    for ($i = 0; $i < count($string); $i++) {

        if (count($quadro) < 3) {
            $quadro[$cont] = $string[$i];
            $cont++;

            //Isso aqui está certo kkkkk
            if ($quadro[0] == $string[$i]) {
                $quadro[0] = $string[$i];
                $qtd[0]++;
            } elseif ($quadro[1] == $string[$i]) {
                $quadro[1] = $string[$i];
                $qtd[1]++;
            } elseif ($quadro[2] == $string[$i]) {
                $quadro[2] = $string[$i];
                $qtd[2]++;
            } else {
                echo "Quadro atigindo";
            }
        } else {

            if ($quadro[0] == $string[$i] || $quadro[1] == $string[$i] || $quadro[2] == $string[$i]) {

                if ($quadro[0] == $string[$i]) {
                    $a++;
                }

                if ($quadro[1] == $string[$i]) {
                    $b++;
                }

                if ($quadro[2] == $string[$i]) {
                    $c++;
                }
            } else {

                if ($a > $b && $a > $c) {
                    $quadro[0] = $string[$i];
                    $a = 0;
                } elseif ($b > $a && $b > $c) {
                    $quadro[1] = $string[$i];
                    $b = 0;
                } else {
                    $quadro[2] = $string[$i];
                    $c = 0;
                }
            }
        }

        echo "<div>";
        echo "<ul style='float:left; list-style:none'><li>";
        for ($t = 0; $t < count($quadro); $t++) {
            echo $quadro[$t] . "<br/>";
        }
        echo "</li></ul>";
        echo "</div>";
    }
    echo "<img src='fifo.jpg' alt='fifo'/>";
?>