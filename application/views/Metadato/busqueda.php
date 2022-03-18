
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


<table border="1" >
<thead>    
		<tr>
			<th>id</th>
			<th>Título</th>
			<th>Descripción</th>
			<th>Palabras  Clave</th>
            <th>Acciones</th>
			
		</tr>

</thead>
<div class="mb-3">
<tbody>
<?php foreach ($metadato as $metadato_item): ?>
    <tr>
        <td><?php echo $metadato_item->id; ?></td>
        <td><?php echo $metadato_item->titulo; ?></td>
        <td><?php echo $metadato_item->descripcion; ?></td>       
        <td> <?php echo  $metadato_item->palabrasClaveT; ?></td>
        <td><a href="<?php echo site_url('metadato/'.$metadato_item->slug); ?>">Ver</a> <a href="<?php echo site_url('metadato/'.$metadato_item->slug); ?>">Borrar</a></td>
        
    </tr>
      
        

<?php endforeach; ?>

</tbody>
</div>
</table>

<?php if (strlen($pagination)):?>
    <div class="mb-3">
    Paginas: <?php echo $pagination;?>
    </div>
<?php endif;?>

</div>
</form>
<?php echo form_close(); ?>


</body>

</html>