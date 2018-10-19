<?php
  try{

    //Instancia o Objeto PDO, para conecta com o Mysql
    $conn = new PDO('mysql:host=localhost; port=3306; dbname=livro', 'root','');


    //Mostra os dados do livro
    $dados = $conn->query('SELECT * FROM famosos')->fetchAll();

    foreach($dados as $Dado){

        echo $Dado[1];
    }

    //Insere no Bacno por Array
    $novo = array('nome'=>'Polly');
    $conn->prepare('INSERT INTO famosos (nome) VALUES (nome)')->execute($novo);

    //Insere sem Array
    $conn->exec('INSERT INTO famosos (nome) VALUES (Julia)');

    //Fecha a conexão
    $conn = null;
  }catch(Exception $e){
    echo "Erro de conexão".$e->getMessage()."\n";
    die();
  }
?>
