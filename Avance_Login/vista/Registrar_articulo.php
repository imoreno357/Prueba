<html><head><title>PHP</title>
     
<link href="css/mvc_estilos.css" rel="stylesheet" type="text/css">
<link href="vistas/css/mvc_estilos.css" rel="stylesheet" type="text/css"></head>
    <?php
include('../controlador/control.php');
?>
<body>
 <a href="menu.php">Atras</a>
<form method="post" action="index.php?controlador=personas&accion=insertar">
<table width="300" cellspacing="1" cellpadding="1" class="tabla_01">
    
<tr>
  <th scope="row">Nombre de Articulo</th>
  <td><input name="art_nom" type="text" class="caja_01" id="art_nom"></td>
</tr>
<tr>
  <th scope="row">Unidad de medida</th>
  <td><input name="art_uni" type="text" class="caja_01" id="art_uni"></td>
</tr>
<tr>
  <th scope="row">Precio</th>
  <td><input name="art_pre" type="text" class="caja_01" id="art_pre"></td>
</tr>
<tr>
  <th scope="row">Stock</th>
  <td><input name="art_stk" type="text" class="caja_01" id="art_stk"></td>
</tr>
   <tr>
  <th scope="row">Cod de Categoria</th>
  <td><input name="catprod_cod" type="text" class="caja_01" id="catprod_cod"></td>
</tr>
  <tr>
  <th scope="row">Codigo Proveedor</th>
  <td><input name="prov_cod" type="text" class="caja_01" id="prov_cod"></td>
</tr>
  <tr>
  <th scope="row">Codigo de Empleado</th>
  <td><input name="emp_cod" type="text" class="caja_01" id="emp_cod"></td>
</tr>

<tr>
  <th colspan="2" scope="row">
      <input name="Submit" type="submit" class="boton_01" value="Enviar"></th>
</tr>
</table></form></body></html>
