<form method="post" action="cadastro_concluido.php" name="cadastroComarca" >
   <table>
      <tr>
         <td><label>Estado</label></td>
         <td>
            <table>
               <tr>
                  <td><input type="checkbox" name="estado[]" value="SP" /></td>
                  <td>SP</td>
               </tr>
               <tr>
                  <td><input type="checkbox" name="estado[]" value="RJ" /></td>
                  <td>RJ</td>
               </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td><input type="submit" name="btn_enviar" value="Enviar"/></td>
         <td></td>
      </tr>
   </table>
</form>