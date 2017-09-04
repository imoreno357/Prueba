<html><head><title>PHP</title>
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vista/css/mvc_styles.css" rel="stylesheet" type="text/css">
    </head>
<body>
<form name="form1" method="post" 
  action="index3.php?controlador=personas&accion=actualizarP&id=
      <?php echo $persona_datos['prov_cod'] ?>">
<table width="300" border="1" cellpadding="1" cellspacing="1" 
   
       class="tabla_01">

<tr>
    
  <th scope="row">Codigo</th>
  <td><input name="prov_cod" type="text" class="caja_01" id="prov_cod" 
             value="<?php echo $persona_datos['prov_cod'] ?>"></td>
</tr>
<tr>
  <th scope="row">Nombre</th>
  <td><input name="prov_nom" type="text" class="caja_01" id="prov_nom" 
             value="<?php echo $persona_datos['prov_nom'] ?>"></td>
</tr>
<tr>
  <th scope="row">Telefono</th>
  <td><input name="prov_telf" type="text" class="caja_01" id="prov_telf" 
             value="<?php echo $persona_datos['prov_telf'] ?>"></td>
</tr>
<tr>
  <th scope="row">Direccion</th>
  <td><input name="prov_dir" type="text" class="caja_01" id="prov_dir" 
             value="<?php echo $persona_datos['prov_dir'] ?>"></td>
</tr>
<tr>
  <th colspan="2" scope="row"><input name="Submit" type="submit" 
                                     class="boton_01" value="Enviar"></th>
</tr>
</table>
</form>
</body>
</html>
