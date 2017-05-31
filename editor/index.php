<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Editor</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">

            $(function(){

                    conteudo.document.designMode = 'On';

            });

            function doBold(){

                conteudo.document.execCommand('bold', false, null);

            }

            function doPre(){

                var pre = "teste";
                conteudo.document.execCommand('pre',pre);

            }

        </script>
    </head>
    <body>
        <p>Editor</p>
        <img src="bold.gif" onClick="doBold()" alt="Bold" title="Bold"/>
        <img src="bold.gif" onClick="doPre()" alt="Pre" title="Pre"/>
        <form method="POST" action="index.php">
            <table>
                <tr>
                    <td><iframe id="conteudo" style="width: 415px; height:205px"></iframe></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Salvar" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>