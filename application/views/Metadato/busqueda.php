
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
<li><a class="active" href="metadato/create">Agregar</a></li>
  <li><a class="active" href="metadato">Busqueda</a></li>  
</ul>

<div class="box-interna">

<div class="form-label">
<form action="#">
                <input type="text"
                    placeholder="Busqueda metadato"
                    name="search">
                  
                <input class="btn" type="submit" value="Buscar">
 </form> 
 </div>

<?php foreach ($metadato as $metadato_item): ?>
    <div class="mb-3">
        <h3><?php echo $metadato_item['titulo']; ?></h3>
        <div class="mb-3">
                <?php echo $metadato_item['descripcion']; ?>
                <a href="<?php echo site_url('metadato/'.$metadato_item['slug']); ?>">Ver metadato</a>
        </div>
        </div>
<?php endforeach; ?>
</div>

<?php echo form_close(); ?>
</form>
</body>

</html>