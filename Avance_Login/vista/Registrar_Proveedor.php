<html><head><title>PHP</title>
     
<link href="css/mvc_estilos.css" rel="stylesheet" type="text/css">
<link href="vistas/css/mvc_estilos.css" rel="stylesheet" type="text/css"></head>
    <?php
include('../controlador/control.php');
?>
<body>
 <a href="menu.php">Atras</a>
<form method="post" action="index3.php?controlador=personas&accion=insertarP">
<table width="300" cellspacing="1" cellpadding="1" class="tabla_01">
    
<tr>
  <th scope="row">Codigo del Proveedor</th>
  <td><input name="prov_cod" type="text" class="caja_01" id="prov_cod"></td>
</tr>
<tr>
  <th scope="row">Nombre</th>
  <td><input name="prov_nom" type="text" class="caja_01" id="prov_nom"></td>
</tr>
<tr>
  <th scope="row">Telefono</th>
  <td><input name="prov_telf" type="text" class="caja_01" id="prov_telf"></td>
</tr>
<tr>
  <th scope="row">Direccion</th>
  <td><input name="prov_dir" type="text" class="caja_01" id="prov_dir"></td>
</tr>
   

<tr>
  <th colspan="2" scope="row">
      <input name="Submit" type="submit" class="boton_01" value="Enviar"></th>
</tr>
</table></form></body></html>
