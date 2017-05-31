<div>
    <p>Galeria</p>
    <button id="seleciona">Seleciona</button>
    <div id="galeria-seleciona">
        <ul>
            <?php
                $conn = new PDO('mysql:host=localhost;port=3306;dbname=php', 'root', '');

                $result = $conn->query("SELECT * FROM galeria");

                foreach ($result as $value) {
                    ?>
                    <li>
                        <input type="checkbox" name="foto" value="<?php echo $value['url']; ?>" />
                        <img src="upload/<?php echo $value['url']; ?>" alt="<?php echo $value['nome']; ?>" title="<?php echo $value['nome']; ?>" width="100" height="100"/>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>
</div>
<input text="texto" id="texto" value="texto" />
<script type="text/javascript" src="js/jquery.min.js" /></script>
<script type="text/javascript">
        
    var teste  =  "Teste";

    $("#seleciona").click(function() {
        $("#galeria").append('Teste');
        
        return 'teste';
    });
</script>