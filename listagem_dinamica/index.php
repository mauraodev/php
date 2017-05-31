<?php 

$link = mysqli_connect("localhost", "root", "", "php") or die ("Erro" . mysqli_error($link));

$query = "SELECT id, usuario FROM usuario";

$result = $link->query($query);

while ($row = mysqli_fetch_object($result)) :

    foreach ($row as $key => $value) :
        
        echo $value;

    endforeach;

    echo '<br>';
    
endwhile;

$arrTabela = array(
    'campos' => array(
        'desnome' => array(
            'tipo' => 'texto',
            'tamanho' => 30,
            'label' => 'Nome'
        ),
        'texresumo' => array(
            'tipo' => 'textarea',
            'label' => 'Resumo'
        )
    ),
    'listagem' => array(
        'id' => array(
            'label' => 'Codigo',
            'ordem' => 1
        ),
        'usuario' => array(
            'label' => 'Nome'
        )     
    )
);

//$json = json_encode($arrTabela);

foreach ($arrTabela['campos'] as $campo => $atributo) :
    ?>
    <label><?php echo $atributo['label']; ?></label>
    <?php
    if ($atributo['tipo'] == 'texto') :
        ?>        
        <input name="<?php echo $campo ?>" value="">
        <?php
    endif;

    if ($atributo['tipo'] == 'textarea') :
        ?>
        <textarea name="<?php echo $campo; ?>"></textarea>
        <?php
    endif;

endforeach;

?>

<?php 
//Monta SQL
foreach ($arrTabela['listagem'] as $campo => $atributo) :    
    $arrCampos[] = $campo;
endforeach;

$sql = "SELECT ";
$sql .= implode(',', $arrCampos);
$sql .= " FROM usuario";

$result = $link->query($sql);

?>

<table>
    <thead>
        <tr>
            <?php
            foreach ($arrTabela['listagem'] as $campo => $atributo) :    
                ?>
                <td><?php echo $atributo['label']; ?></td>        
                <?php
            endforeach;
            ?>
        </tr>
    </thead>
    <tbody>
        <?php 
        while ($row = mysqli_fetch_object($result)) :
            ?>
            <tr>
                <?php
                foreach ($arrTabela['listagem'] as $campo => $atributo) :
                    ?>
                    <td><?php echo $row->$campo; ?></td>
                    <?php
                endforeach;
                ?>
            </tr>
            <?php
        endwhile;
        ?>
    </tbody>
</table>