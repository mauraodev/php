<?php 

  $conn = new PDO('mysql:host=localhost; port=3306; dbname=marcia', 'root','');

  $dados = $conn->query('SELECT * FROM foto')->fetchAll();

  foreach ($dados as $valor) {

        $data =  array();
        $json = '';
      
        $arrFotos = explode(',', $valor['glrgaleria']);

        foreach ($arrFotos as $foto) {
           $data[] = array(
                'id' => '',
                'arquivo' => '',
                'path' => $foto,
                'pathDownload' => '',
                'render' => '',
                'nomeCampo' => '',
                'extensao' => '',
                'tamanho' => '',
                'dimensao' =>'',
                'legenda' => '',
                'tipo' => 'galeria'
            );     

        }

        $json = json_encode($data);

        $sql = "UPDATE foto SET glrgaleria = '" . $json . "' WHERE codfoto = ". $valor['codfoto'];

        $conn->query($sql);

  }
?>