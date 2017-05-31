<p><a href="index.php">Voltar</a></p>
<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td></td>
        <td></td>
    </tr>
    <?php
        include("conexao.php");

        $query = "SELECT id, nome, sobrenome FROM cadastro ORDER BY id";

        $executa = mysql_query($query);

        while($campo = mysql_fetch_array($executa)){
        ?>
        <tr>
            <td><?php echo $campo['id']; ?></td>
            <td><?php echo $campo['nome']; ?></td>
            <td><?php echo $campo['sobrenome']; ?></td>
            <td><a href="editar.php?id=<?php echo $campo['id']; ?>">Editar</a></td>
            <td><a href="deletar.php?id=<?php echo $campo['id']; ?>">Deletar</a></td>
        </tr>
        <?php
        }

    ?>
</table>