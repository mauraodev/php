
<html>
    <head>
        <title>Upload de arquivo via AJAX com jQuery</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.form.js"></script>

        <script type="text/javascript" >
            $(document).ready(function() {
                $('#form').ajaxForm({
                    uploadProgress: function(event, position, total, percentComplete) {
                        $('progress').attr('value', percentComplete);
                        $('#porcentagem').html(percentComplete + '%');

                    },
                    success: function(data) {
                        $('progress').attr('value', '100');
                        $('#porcentagem').html('100%');
                        $('pre').html(data);
                    }
                });
            });
        </script>
    </head>
    <body>
        <form action="post.php" method="post" id="form">

            <div id="file">
                <input type="file" name="file" multiple>
                <br ><br >
                <progress value="0" max="100"></progress><span id="porcentagem">0%</span>

            </div>
            <br />
            <input type="submit">
        </form>

        <pre>

        </pre>
    </body>
</html>