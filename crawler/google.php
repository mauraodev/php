<?php

include_once "simple_html_dom.php";

echo ":: Inicio Crawler";

$pesquisa = "php";

$start = 4;

$url = "http://www.google.com.br/search?q=" . urlencode($pesquisa) . "&oq=gg&aqs=chrome..69i57j69i60l3.319j0j1&sourceid=chrome&espv=210&es_sm=93&ie=UTF-8&num=10&start=" . $start;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

$htmlStr = curl_exec($ch);
$error = curl_error($ch);

// Verifica se teve algum problema ao carregar página
if (!empty($error)) {
    echo "<pre>"; print_r($error); echo "</pre>"; exit();
}

curl_close($ch);

$html = new simple_html_dom();
$html->load($htmlStr);

$site = "http://phpbrasil.com";

if ($html == false) {
    exit("Bloqueado pelo Google!");
} else {

    foreach($html->find('h3 a') as $indice => $value) {

        echo "<br>" . $value . "<br>";
        echo "<br>" . $value->href . '<br>';

        if (strpos($value->href, $site) != false) {

            echo "<pre>"; print_r($indice); echo "</pre>"; exit();

            $html->clear();
            unset($html);
            break;
        }
    }


}


