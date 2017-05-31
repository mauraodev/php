<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Upload em PHP</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
            <label for="file">Filename:</label>
            <input type="file" name="file" id="file"><br>
            <input type="submit" name="submit" value="Submit">
        </form>

    </body>
</html>