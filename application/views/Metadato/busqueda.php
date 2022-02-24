<!DOCTYPE html>
<html lang="es">
<html>
    <head>
    <LINK REL=StyleSheet HREF="css/testEstilo.css" TYPE="text/css" MEDIA=screen>
    <script src="js/testFuncionalidad.js"> </script>

    </head>
<img src="img/logo.jpg">
<h1>Formulario Metadatos</h1>

<ul>
<li><a class="active" href="test.php">Agregar</a></li>
  <li><a class="active" href="busqueda.php">Busqueda</a></li>
  
</ul>

<body>

<!-- search bar right align -->
<div class="box-interna">

<div class="search">
<form action="#">
                <input type="text"
                    placeholder="Busqueda metadato"
                    name="search">
                
                <input class="btn" type="submit" value="Buscar">
 </form>   
            
</div>
</div>
<p>
 <?php //COMO MOSTRAR DATOS DE LA BASE DE DATOS 
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$sql = "SELECT * FROM metadato";
foreach ($pdo->query($sql) as $row) {
   echo $row['titulo'] . "<br />";
   //echo "Descripcion " . $row['descripcion'] . "<br />";
}
?>
</p>

</div>

</html>
</body>