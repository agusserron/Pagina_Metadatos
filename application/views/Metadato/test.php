<!DOCTYPE html>
<html lang="es">
<html>
    <head>
    <LINK REL=StyleSheet HREF="css/testEstilo.css" TYPE="text/css" MEDIA=screen>
    <script src="js/testFuncionalidad.js"> </script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

  

</head>
<img src="img/logo.jpg">
<h1>Formulario Metadatos</h1>



<ul>
<li><a class="active" href="test.php">Agregar</a></li>
  <li><a class="active" href="busqueda.php">Busqueda</a></li>
  
</ul>

<body>
<div class="box-interna">
<form action="formpost.php" method="post" onsubmit="return validar();"> 

<div class="mb-3">
    
</div>

<div class="mb-3">
  <label for="titulo" class="form-label">Título:</label>
  <input type="text" class="form-control" id="titulo">
</div>

<div class="mb-3">
    <label for="id" class="form-label">ID:</label>
    <input type="text" class="form-control" id="id">
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción:</label>
  <textarea class="form-control" id="descripcion" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="proposito" class="form-label">Propósito de generación:</label>
  <textarea class="form-control" id="proposito" rows="3"></textarea>
</div>
<div class="mb-3">
    <label for="id" class="form-label">Palabras clave temáticas:</label>
    <input type="text" class="form-control" id="PalabrasClaveT">
</div>
<div class="mb-3">
    <label for="id" class="form-label">Palabras clave geográficas:</label>
    <input type="text" class="form-control" id="PalabrasClaveG">
</div>
<div class="mb-3">
<label for="descripcion" class="form-label">Fecha de creación:</label>
<input type="date" id="descripcion" name="trip-start"
       value="2018-07-22"
       min="1996-01-01" max="2060-12-31">
</div>
<select class="form-select" aria-label="Default select example" id="estado">
  <option selected>Estado</option>
  <option value="1">Activo</option>
  <option value="2">Resultado intermedio</option>
  <option value="3">Obsoleto</option>
</select>
<select class="form-select" aria-label="Default select example" id="formato">
  <option selected>Formato</option>
  <option value="1">SHP</option>
  <option value="2">TIFF</option>
  <option value="3">PNG</option>
  <option value="4">KML</option>
  <option value="5">CSV</option>
</select>

<select class="form-select" aria-label="Default select example"id="categoria">
  <option selected>Categoría</option>
  <option value="1">Geonetwork</option>
  <option value="2">Otra</option>
</select>

<select class="form-select" aria-label="Default select example"id="idioma">
  <option selected>Idioma</option>
  <option value="1">Español</option>
  <option value="2">Inglés </option>
  <option value="3">Portugués </option>
</select>
<div class="mb-3">
<label for="descripcion" class="form-label">Última actualización</label>
<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="1996-01-01" max="2060-12-31">
</div>
<select class="form-select" aria-label="Default select example"id="frecActualiazacion">
  <option selected>Frecuencia de actualización</option>
  <option value="1">Mensual</option>
  <option value="2">Anual</option>
  <option value="3">Desconocido</option>
  <option value="4">Según necesidad</option>
</select>


<div class="mb-3">
    <label for="id" class="form-label">Contacto del recurso:</label>
    <input type="text" class="form-control" id="PalabrasClave">
</div>
<div class="mb-3">
    <label for="id" class="form-label">Disponible:</label>
    <input type="text" class="form-control" id="PalabrasClave">
</div>

<select class="form-select" aria-label="Default select example"id="tipoRep">
  <option selected>Tipo de representación:</option>
  <option value="1">Vectorial</option>
  <option value="2">Ráster</option>
  <option value="3">Imágen</option>
  <option value="4">Tabla de texto</option>
</select>
<select class="form-select" aria-label="Default select example"id="coordenadas">
  <option selected>Sistema de referencia de coordenadas:</option>
  <option value="1">UTM</option>

</select>
<select class="form-select" aria-label="Default select example"id="coberturaEspacial">
  <option selected>Cobertura espacial</option>
  <option value="1">Completar</option>

</select>
<select class="form-select" aria-label="Default select example"id="coberturaTemporal">
  <option selected>Cobertura temporal</option>
  <option value="1">Completar</option>
</select>
<div class="mb-3">
    <label for="id" class="form-label">Escala:</label>
    <input type="text" class="form-control" id="escala">
</div>

<p>
<div class="mb-3">
<label for="id" class="form-label">Ingresar tabla de campos:</label>

    <input type="file" name="archivosubido">
  
  </p>
</div>

<div class="mb-3">
    <label for="id" class="form-label">Restricciones legales:</label>
    <input type="text" class="form-control" id="restLegales">
</div>

</select>
<select class="form-select" aria-label="Default select example"id="norma">
  <option selected>Norma calidad metadatos</option>
  <option value="1">ISO 19115:2003/19139</option>
</select>


<p>
<div class="mb-3">
<label for="id" class="form-label">Otro archivo:</label>

    <input type="file" name="archivosubido">
  
  </p>
</div>

<div class="mt-4">
    <input class="btn" type="submit" value="Enviar">
    </div>
</div>
   
</form>


</body>

 <!--Conexion a base de datos -->


<?php 
//INSERTAR DATOS 
/*$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$sql = "INSERT INTO users (forename, surname, email, password) 
VALUES ('Paddy', 'Irish', 'paddy@irish.com', 'qaywsx')";
if ($pdo->exec($sql) === 1)
  echo "New record created successfully";
*/
?>


</html>


