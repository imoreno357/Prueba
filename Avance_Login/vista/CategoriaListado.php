<html><head><title>php</title>
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vistas/css/mvc_styles.css" rel="stylesheet" type="text/css"></head>
<body>
<a href="index2.php?controlador=personas&accion=nuevoC">Agregar Nueva Categoria</a>
<br/>
<br/>
<table width="550" cellpadding="1" cellspacing="1" class="tabla_01">
  <tr>
    <th scope="col">catprod_cod</th> <th scope="col">catprod_nom</th>
   
    
    <th scope="col">Editar</th><th scope="col">Borrar</th>
  </tr>
  <?php foreach($data as $info){?>
  <tr onMouseOver="this.className='fila_activa'" 
      onMouseOut="this.className='fila_normal'">
    <td class="brd_inf"><?php echo $info['catprod_cod'] ?></td>
    <td class="brd_inf"><?php echo $info['catprod_nom'] ?></td>
    

    <td class="brd_inf"><a href="index2.php?controlador=personas&accion=editarC&id=<?php echo $info['catprod_cod']?>">Editar</a></td>
    <td class="brd_inf"><a href="index2.php?controlador=personas&accion=borrarC&id=<?php echo $info['catprod_cod'] ?>">Borrar</a></td>
  </tr>
<?php } ?>
</table>
 <a href="menu.php">Regresar al Menu</a>
</body>
</html>