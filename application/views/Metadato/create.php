<?php echo validation_errors(); ?>

<div class="container">
    <div class="row">
    <div class="col-md-12">

    <div class="theh1">Formulario Metadatos</div>


    <?php echo form_open('metadato/create'); ?>


<div class="mb-3">
  <label for="titulo" class="form-label">Título:</label>
  <input type="text" class="form-control" id="titulo" name="titulo">
</div>


<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción:</label>
  <textarea class="form-control" id="descripcion"  rows="3" name="descripcion"></textarea>
</div>
<div class="mb-3">
  <label for="proposito" class="form-label">Propósito de generación:</label>
  <textarea class="form-control" id="proposito" rows="3" name="proposito"></textarea>
</div>
<div class="mb-3">
    <label for="id" class="form-label">Palabras clave temáticas:</label>
    <input type="text" class="form-control" id="PalabrasClaveT" name="PalabrasClaveT">
</div>
<div class="mb-3">
    <label for="id" class="form-label">Palabras clave geográficas:</label>
    <input type="text" class="form-control" id="PalabrasClaveG" name="PalabrasClaveG">
</div>
<div class="mb-3">
<label for="descripcion" class="form-label">Fecha de creación:</label>
<input type="date" id="descripcion" name="trip-start"
       value="2018-07-22"
       min="1996-01-01" max="2060-12-31">
</div>
<div class="mb-3">
<select class="form-select" aria-label="Default select example" id="estado">
  <option selected>Estado</option>
  <option value="1">Activo</option>
  <option value="2">Resultado intermedio</option>
  <option value="3">Obsoleto</option>
</select>

<br />

<select class="form-select" aria-label="Default select example" id="formato">
  <option selected>Formato</option>
  <option value="1">SHP</option>
  <option value="2">TIFF</option>
  <option value="3">PNG</option>
  <option value="4">KML</option>
  <option value="5">CSV</option>
</select>

<br />

<select class="form-select" aria-label="Default select example"id="categoria">
  <option selected>Categoría</option>
  <option value="1">Geonetwork</option>
  <option value="2">Otra</option>
</select>

<br />

<select class="form-select" aria-label="Default select example"id="idioma">
  <option selected>Idioma</option>
  <option value="1">Español</option>
  <option value="2">Inglés </option>
  <option value="3">Portugués </option>
</select>
</div>
<div class="mb-3">
<label for="descripcion" class="form-label">Última actualización</label>
<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="1996-01-01" max="2060-12-31">
</div>
<div class="mb-3">
<select class="form-select" aria-label="Default select example"id="frecActualiazacion">
  <option selected>Frecuencia de actualización</option>
  <option value="1">Mensual</option>
  <option value="2">Anual</option>
  <option value="3">Desconocido</option>
  <option value="4">Según necesidad</option>
</select>
</div>


<div class="mb-3">
    <label for="contacto" class="form-label">Contacto del recurso:</label>
    <input type="text" class="form-control" id="contacto">
</div>
<div class="mb-3">
    <label for="diponible" class="form-label">Disponible:</label>
    <input type="text" class="form-control" id="disponible">
</div>



<div class="mb-3">
<select class="form-select" aria-label="Default select example"id="tipoRep">
  <option selected>Tipo de representación:</option>
  <option value="1">Vectorial</option>
  <option value="2">Ráster</option>
  <option value="3">Imágen</option>
  <option value="4">Tabla de texto</option>
</select>

<br />

<select class="form-select" aria-label="Default select example"id="coordenadas">
  <option selected>Sistema de referencia de coordenadas:</option>
  <option value="1">UTM</option>

  <br />

</select>
<select class="form-select" aria-label="Default select example"id="coberturaEspacial">
  <option selected>Cobertura espacial</option>
  <option value="1">Completar</option>

  <br />

</select>
<select class="form-select" aria-label="Default select example"id="coberturaTemporal">
  <option selected>Cobertura temporal</option>
  <option value="1">Completar</option>
</select>
</div>
<div class="mb-3">
    <label for="id" class="form-label">Escala:</label>
    <input type="text" class="form-control" id="escala">
</div>


<div class="mb-3">
<label for="tabla" class="form-label">Ingresar tabla de campos:</label>
<p>
    <input type="file" name="archivosubido">
  
  </p>
</div>

<div class="mb-3">
    <label for="restLegales" class="form-label">Restricciones legales:</label>
    <input type="text" class="form-control" id="restLegales">
</div>

<div class="mb-3">
<select class="form-select" aria-label="Default select example"id="norma">
  <option selected>Norma calidad metadatos</option>
  <option value="1">ISO 19115:2003/19139</option>
</select>
</div>


<div class="mb-3">
<label for="archivo" class="form-label">Otro archivo:</label>
<p>
    <input type="file" name="archivosubido">
  
  </p>
</div>

<div class="mt-4">
    <button type="submit" class="btn btn-dark">Enviar</button>
    </div>

    



<?php echo form_close(); ?>
<p> &nbsp; </p>
<p> &nbsp; </p>
<p> &nbsp; </p>
</div>
</div>
    </div>

