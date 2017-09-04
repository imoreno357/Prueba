<html><head><title>PHP</title>
     
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vistas/css/estilos.css" rel="stylesheet" type="text/css"></head>
     <a href="menu.php">Atras</a>
    <?php
include('../controlador/control.php');
?>
<body>

<form method="post" action="index2.php?controlador=personas&accion=insertarC">
<table width="300" cellspacing="1" cellpadding="1" class="tabla_01">
    
<tr>
  <th scope="row">Categoria del Producto</th>
  <td><input name="catprod_cod" type="text" class="caja_01" id="catprod_cod"></td>
</tr>
<tr>
  <th scope="row">Nombre De Categoria</th>
  <td><input name="catprod_nom" type="text" class="caja_01" id="catprod_nom"></td>
</tr>

<tr>
  <th colspan="2" scope="row">
      <input name="Submit" type="submit" class="boton_01" value="Enviar"></th>
</tr>
</table></form></body></html>
