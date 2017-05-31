<?php
   //Conexão
   include("config.php");

   //SQLs
   $sql = mysql_query("SELECT comarca, estado, qtd_ativo, qtd_novo, qtd_audiencia, qtd_encerrado FROM est_diario");

?>
<form method="post" action="est_diario_resultado.php" >
   <table>
      <tr>       
         <td><label>Data</label></td>
         <td><input type="text" name="data" value="" /></td>
      </tr>
      <tr>
         <td valign="top"><label>Comarca</label></td>
         <td>
            <?php
               while($comarca = mysql_fetch_array($sql)){
                  ?>
                  <p><input type="checkbox" name="comarca[]" value="<?php echo $comarca['comarca']; ?>" /><?php echo $comarca['comarca']; ?></p>
                  <?php
               }
            ?>
         </td>
      </tr>
      <tr>
         <td valign="top"><label>Tipos de Processos</label></td>
         <td>
            <p><input type="checkbox" name="ativo" value="ativo" />Ativo</p>
            <p><input type="checkbox" name="novo" value="novo" />Novo</p>
            <p><input type="checkbox" name="audiencia" value="audiencia" />Audiência</p>
            <p><input type="checkbox" name="encerrado" value="encerrado" />Encerrado</p>
         </td>
      </tr>
      <tr>
         <td></td>
         <td><input type="submit" name="btnEnviar" value="Enviar" /></td>
      </tr>
   </table>
</form>
