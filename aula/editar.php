<p><a href="visualizar.php">Visualizar</a></p>
<?php
    include("conexao.php");

    $id = $_REQUEST['id'];

    $query = "SELECT id, nome, sobrenome FROM cadastro WHERE id = ".$id." ";

    $executa = mysql_query($query);

    while($campo = mysql_fetch_array($executa)){

    ?>
    <form action="editar_salvar.php" method="POST">
        <table>
            <tr>
                <td><label>Nome</label></td>
                <td><input type="text" name="nome" value="<?php echo $campo['nome']; ?>"/></td>
            </tr>
            <tr>
                <td><label>Sobrenome</label></td>
                <td><input type="text" name="sobrenome" value="<?php echo $campo['sobrenome']; ?>" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $campo['id']; ?>" /></td>
                <td><input type="submit" name="btnSalvar" value="Salvar" /></td>
            </tr>
        </table>
    </form>
    <?php
    }
?>