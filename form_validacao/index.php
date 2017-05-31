<script type="text/javascript" src="jquery.js"></script>
<form method="post" action="" id="formulario">
   <input type="submit" value="Enviar" />
</form>
<script type="text/javascript">
   $('#formulario').submit(function() {
      alert('Handler for .submit() called.');
      return false;
   });
</script>
<button id="botao">Teste</button>
<script type="text/javascript">
   $("#botao").click(function() {
      alert("Teste");
   });
</script>