<?php

ini_set('memory_limit', '512M');
set_time_limit(0);

//conection:
$link = mysqli_connect("localhost","root","","trio") or die("Error " . mysqli_error($link));

//consultation:

$query = "SELECT apptabela.texobjeto FROM apptabela WHERE desnome = 'appestado'" or die("Error in the consult.." . mysqli_error($link));

//execute the query.

$result = $link->query($query);

//display information:


while($row = mysqli_fetch_array($result)) {
      
    echo unserialize($row["texobjeto"]);

} 




/*$arrCampos = array(
    'tabela' => 'teste',
    'campos' => array(
        array(
            'nome' => 'codteste',
            'label' => 'Código'
        ),
        array(
            'nome' => 'desnome',
            'label' => 'Nome'
        )
    ),
    'listagem' => array(
        array(
            'nome' => 'codteste',
            'label' => 'Código'
        ),
        array(
            'nome' => 'desnome',
            'label' => 'Nome'
        )
    ),
    'cadastro' => array(
    )
);

echo "<pre>";
print_r($arrCampos);
echo "</pre>";*/
?>