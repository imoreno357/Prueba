<html><head><title>PHP</title>
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vista/css/mvc_styles.css" rel="stylesheet" type="text/css">
    </head>
<body>
<form name="form1" method="post" 
  action="index2.php?controlador=personas&accion=actualizarC&id=
      <?php echo $persona_datosC['catprod_cod'] ?>">
<table width="300" border="1" cellpadding="1" cellspacing="1" 
   
       class="tabla_01">

<tr>
    
  <th scope="row">Codigo Categoria</th>
  <td><input name="catprod_cod" type="text" class="caja_01" id="catprod_cod" 
             value="<?php echo $persona_datosC['catprod_cod'] ?>"></td>
</tr>
<tr>
  <th scope="row">Nombre Categoria</th>
  <td><input name="catprod_nom" type="text" class="caja_01" id="catprod_nom" 
             value="<?php echo $persona_datosC['catprod_nom'] ?>"></td>
</tr>

<tr>
  <th colspan="2" scope="row"><input name="Submit" type="submit" 
                                     class="boton_01" value="Enviar"></th>
</tr>
</table>
</form>
</body>
</html>
