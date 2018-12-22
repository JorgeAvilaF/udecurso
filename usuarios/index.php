<?php include '../extend/header.php'?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Alta de Usuarios</span>
        <form class="" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
          <div class="input-field">
            <input type="text" name="nick" required autofocus title="Debe contener entre 8 a 15 caracteres"
            pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value, this.id)">
            <label for="nick">Nick Name:</label>
          </div>

          <div class="input-field">
            <input type="password" name="pass1" title="Contraseña con numeros,letras mayusculas y minusculas entre 8 a 15 caracteres" pattern="[A-Za-z0-9]{8,15}" id="pass" required>
            <label for="pass1">Contraseña:</label>
          </div>
          <div class="validacion"></div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include '../extend/scripts.php' ?>
<script type="text/javascript">
  $('#nick').change(function(){
    $.post('ajax_validacion_nick.php', {
      nick:$('#nick').val(),

      beforeSend: function(){
        $('.validacion').html("Espere un momento por favor...");
      }
    },
    function(respuesta){
      $('.validacion').html(respuesta);
    });
  });
</script>
</body>
</html>
