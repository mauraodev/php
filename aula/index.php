<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>CRUD - Simples</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <p><a href="visualizar.php">Visualizar</a></p>
        <form action="cadastro.php" method="POST">
            <table>
                <tr>
                    <td><label>Nome</label></td>
                    <td><input type="text" name="nome" /></td>
                </tr>
                <tr>
                    <td><label>Sobrenome</label></td>
                    <td><input type="text" name="sobrenome" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Salvar" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
