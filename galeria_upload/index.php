<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Galeria Upload</title>
        <link rel="stylesheet" type="text/css" href="js/lightbox/themes/default/jquery.lightbox.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/lightbox/jquery.lightbox.min.js"></script>
        <script type="text/javascript">
            $(function(){
               $("#lbhtml").click(function() {
                    var html = $("#console");

                    $.lightbox(html, {
                    width   : 350,
                    height  : 150
                    });
                  
                    $.ajax({
                        url: 'galeria.php',
                        cache: false,
                        success: function(data){
                            $("#console").html(data);
                        }
                    });
                  
                });                
                
            });
            
            function seleciona() {
                
            }
        </script>
    </head>
    <body>
        <a href="upload.php?llightbox[iframe]=true&lightbox[width]=500&lightbox[height]=300" class="lightbox">Upload</a>
        <a href="galeria.php?llightbox[iframe]=true&lightbox[width]=500&lightbox[height]=300" class="lightbox">Seleciona</a>
        <input type="submit" class="button" id="lbhtml" value="Create a div 'on the fly'"/>
        <div id="console">
        </div>
        <div id="galeria">
        </div>
    </body>
</html>