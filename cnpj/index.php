<!DOCTYPE html>
<html>
    <head>
        <title>CNPJ e Captcha</title>
    </head>
    <body>
        <form method="post" action="processa.php">
            <p><span class="titleCats">CNPJ e Captcha</span>
                <br />
                <input type="text" name="CNPJ" maxlength="19" required /> 
                <b style="color: red">CNPJ</b>
                <br />
                <img src="get_captcha.php" border="0">
                <br />
                <input type="text" name="CAPTCHA" maxlength="6" required />
                <b style="color: red">Digite os caracteres acima</b>
                <br />
            </p>
            <p>
                <input id="id_submit" name="enviar" type="submit" value="Consultar"/>
            </p>
        </form>
    </body>
</html>
