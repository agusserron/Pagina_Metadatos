
<!DOCTYPE html>
<html lang="es">
<html>
    <head>
    <LINK REL=StyleSheet TYPE="text/css" MEDIA=screen href="<?= base_url() ?>assets/css/testEstilo.css">
    <script src="<?= base_url() ?>assets/js/testFuncionalidad.js"> </script>
    </head>

<body>

<?php echo form_open('metadato/busqueda'); ?>


<h1>Formulario Metadatos</h1>

<ul>
<li><a class="active" href="create">Agregar</a></li>
  <li><a class="active" href="busqueda">Busqueda</a></li>  
</ul>

<div class="box-interna">
<div class="mb-3">
<div class="form-label">
<form action="#">
                <input type="text"
                    placeholder="Busqueda metadato"
                    name="search">
                  
                <input class="btn" type="submit" value="Buscar">
 
 </div>
 </div>



<?php echo $this->table->generate($records); ?>


<?php echo $this->pagination->create_links(); ?>
</div>
</form> 

<?php echo form_close(); ?>

</form>

</body>

</html>