<?php echo validation_errors(); ?>

<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <LINK REL=StyleSheet TYPE="text/css" MEDIA=screen href="<?= base_url() ?>assets/css/testEstilo.css">
    <script src="<?= base_url() ?>assets/js/testFuncionalidad.js"> </script>


</head>
<?php echo form_open('metadato/form_login'); ?>
<h1>Formulario Metadatos</h1>

<ul>
<li><a class="active" href="http://localhost/cod3/index.php/metadato">Agregar</a></li>
  <li><a class="active" href="http://localhost/cod3/index.php/metadato">Busqueda</a></li>  
</ul>

<body>
<div class="box-interna">


<div class="mb-3">
  <label for="usuario" class="form-label">Usuario:</label>
  <input type="text" class="form-control" id="usuario" name="usuario">
</div>

<div class="mb-3">
  <label for="contraseña" class="form-label">Contraseña:</label>
  <input  class="form-control" id="contraseña" name="contraseña">
</div>




<div class="mt-4">
    <input class="btn" type="submit" value="Ingresar">
    </div>
</div>

<?php echo form_close(); ?>
</form>

</body>

</html>