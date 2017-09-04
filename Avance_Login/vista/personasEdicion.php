<html><head><title>PHP</title>
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vista/css/mvc_styles.css" rel="stylesheet" type="text/css">
    </head>
<body>
<form name="form1" method="post" 
  action="index.php?controlador=personas&accion=actualizar&id=
      <?php echo $persona_datos['art_cod'] ?>">
<table width="300" border="1" cellpadding="1" cellspacing="1" 
   
       class="tabla_01">

<tr>
    
  <th scope="row">art_nom</th>
  <td><input name="art_nom" type="text" class="caja_01" id="art_nom" 
             value="<?php echo $persona_datos['art_nom'] ?>"></td>
</tr>
<tr>
  <th scope="row">art_uni</th>
  <td><input name="art_uni" type="text" class="caja_01" id="art_uni" 
             value="<?php echo $persona_datos['art_uni'] ?>"></td>
</tr>
<tr>
  <th scope="row">art_pre</th>
  <td><input name="art_pre" type="text" class="caja_01" id="art_pre" 
             value="<?php echo $persona_datos['art_pre'] ?>"></td>
</tr>
<tr>
  <th scope="row">art_stk</th>
  <td><input name="art_stk" type="text" class="caja_01" id="art_stk" 
             value="<?php echo $persona_datos['art_stk'] ?>"></td>
</tr>
<tr>
  <th scope="row">catprod_cod</th>
  <td><input name="catprod_cod" type="text" class="caja_01" id="catprod_cod" 
             value="<?php echo $persona_datos['catprod_cod'] ?>"></td>
</tr>
<!--
<tr>
  <th scope="row">prov_cod</th>
  <td><input name="prov_cod" type="text" class="caja_01" id="prov_cod" value="<?php echo $persona_datos['prov_cod'] ?>"></td>
</tr>
<tr>
  <th scope="row">emp_cod</th>
  <td><input name="emp_cod" type="text" class="caja_01" id="emp_cod" value="<?php echo $persona_datos['emp_cod'] ?>"></td>
</tr>
-->
<tr>
  <th colspan="2" scope="row"><input name="Submit" type="submit" 
                                     class="boton_01" value="Enviar"></th>
</tr>
</table>
</form>
</body>
</html>
