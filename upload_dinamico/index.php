<!DOCTYPE html>
<html>
<head>
    <title>PekeDownload</title>
    
    <link href="css/themes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/pekeUpload.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){ 
            $("#file").pekeUpload({
                theme:'bootstrap',
                btnText: 'Selecionar'
            });
        });
    </script>
</head>
    <body>
        <input id="file" type="file" name="file" />
    </body>
</html>