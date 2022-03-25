<div class="container" style="padding-left: 50px; padding-right: 50px; background-color: white;">
    <div class="row">
    <div class="col-md-12">

    <div class="theh1">Listado de Metadatos</div>

 <table id="metadatos-table" class="display">
 <thead>
 <tr><td>ID</td><td>T&iacute;tulo</td><td>Descripci&oacute;n</td><td>Palabras Clave</td><td>Acciones</td></tr>
 </thead>
 <tbody>


 <?php foreach ($metadato as $metadato_item): ?>
    <tr>
        <td><?php echo $metadato_item->id; ?></td>
        <td><?php echo $metadato_item->titulo; ?></td>
        <td><?php echo $metadato_item->descripcion; ?></td>       
        <td> <?php echo  $metadato_item->palabrasClaveT; ?>
    
        <div id="popup<?php echo $metadato_item->id; ?>" class="overlay">
	<div class="popup">
		<h2><?php echo $metadato_item->titulo; ?></h2>
		<a class="close" href="#">×</a>
		<div class="content">
			<p align="left">
            <?php echo "<strong>Descripci&oacute;n: </strong><br />".$metadato_item->descripcion; ?><br />      
            <?php echo "<strong>Palabras Clave: </strong><br />".$metadato_item->palabrasClaveT; ?><br />
            </p>
		</div>
	</div>
    </div> 
    
    
    </td>
        
        <td><a href="#popup<?php echo $metadato_item->id; ?>"><button type="submit" class="btn btn-success btn-sm" title="Ver Metadatos" alt="Ver Metadatos">Ver</button></a> <a href="<?php echo site_url('metadato/busqueda?'.$metadato_item->id); ?>"><button type="submit" class="btn btn-danger btn-sm" title="Borrar" alt="Borrar" onclick="return confirm('Est&aacute; a punto de eliminar el registro &quot;<?php echo $metadato_item->titulo; ?>&quot; - Est&aacute; seguro?')">Borrar</button></a></td>
    </tr>
 


<?php endforeach; ?>



 </tbody>
 </table> 
<p> &nbsp; </p>
    </div>
    </div>
    </div>







<!-- begin norberto datatables js load-->

<script type="text/javascript">

$(document).ready(function() {
    $('#metadatos-table').DataTable( {
        "order": [[ 0, "desc" ]],
        "columnDefs": [ {"targets": 4, "orderable": false } ]
    } );
});

/*
//version via json
$(document).ready(function() {
    $('#metadatos-table').DataTable({
        "ajax": {
            url : "<?php echo site_url("listado") ?>",
            type : 'GET'
        },
    });
});
*/





</script>

<!-- end norberto datatables js load-->
