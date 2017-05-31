<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Modal de Arquivo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){

        $('#selecionar').click(function(){

          $.ajax({
            url: 'imagem.php',
            data: {imagem:$('#arquivo').val()},
            success: function(data) {
              $('#conteudo').html(data);
            }
          });

          $('#myModal').modal('toggle')
        });
        
      });
    </script>
</head>
<body>

    <button class="btn btn-info" id="selecionar">Selecionar</button>

    <textarea name="arquivo" id="arquivo">img/173.jpg,img/173.jpg</textarea>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Gerenciador de Arquivos</h4>
          </div>
          <div class="modal-body" id="conteudo">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
</html>