
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



<?php 
 echo $this->table->generate($records); 
$template = array(
        'table_open'            => '<table border="0" cellpadding="4" cellspacing="0">',

        'thead_open'            => '<thead>',
        'thead_close'           => '</thead>',

        'heading_row_start'     => '<tr>',
        'heading_row_end'       => '</tr>',
        'heading_cell_start'    => '<th>',
        'heading_cell_end'      => '</th>',

        'tbody_open'            => '<tbody>',
        'tbody_close'           => '</tbody>',

        'row_start'             => '<tr>',
        'row_end'               => '</tr>',
        'cell_start'            => '<td>',
        'cell_end'              => '</td>',

        'row_alt_start'         => '<tr>',
        'row_alt_end'           => '</tr>',
        'cell_alt_start'        => '<td>',
        'cell_alt_end'          => '</td>',

        'table_close'           => '</table>'
);

$this->table->set_template($template); ?>

<<table border="1" >
		<tr>
			<th>id</th>
			<th>Título</th>
			<th>Descripción</th>
			<th>Palabras  Clave</th>
            <th>Acciones</th>
			
		</tr>

</thead>
<div class="mb-3">
<?php foreach ($metadato as $metadato_item): ?>
    <tr>
        <td><?php echo $metadato_item['id']; ?></td>
        <td><?php echo $metadato_item['titulo']; ?></td>
        <td><?php echo $metadato_item['descripcion']; ?></td>
        
        <td> <?php echo $metadato_item['palabrasClaveT']; ?></td>
        <td><a href="<?php echo site_url('metadato/'.$metadato_item['slug']); ?>">Ver</a> <a href="<?php echo site_url('metadato/'.$metadato_item['slug']); ?>">Borrar</a></td>
        
      </tr>
      
        
</div>
<?php endforeach; ?>
<a href="http://localhost/cod3/index.php/metadato/busqueda" data-ci-pagination-page="1" rel="prev">&lt;</a>
        <a href="http://localhost/cod3/index.php/metadato/busqueda" data-ci-pagination-page="1" rel="start">1</a>
        
</table>

<?php echo $this->pagination->create_links(); ?>
</div>
</form> 

<?php echo form_close(); ?>

</form>

</body>

</html>