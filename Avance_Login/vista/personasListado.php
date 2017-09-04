<html><head><title>php</title>
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vistas/css/mvc_styles.css" rel="stylesheet" type="text/css"></head>
<body>
<a href="index.php?controlador=personas&accion=nuevo">Agregar Nuevo Articulo</a>
 <a href="menu.php">Atras</a>
<br/>
<br/>
<table width="550" cellpadding="1" cellspacing="1" class="tabla_01">
  <tr>
        <th scope="col">Codigo</th><th scope="col">Nombre</th>
    <th scope="col">uni</th><th scope="col">Precio</th>
    <th scope="col">Stock</th><th scope="col">Cod Categoria</th>
    <!--<th scope="col">Cod Proveedor</th><th scope="col">Cod Empleado</th>-->
  
    <th scope="col">Editar</th> <th scope="col">Borrar</th>
  </tr>
  <?php foreach($data as $info){?>
  <tr onMouseOver="this.className='fila_activa'" 
      onMouseOut="this.className='fila_normal'">
    <td class="brd_inf"><?php echo $info['art_cod'] ?></td>
    <td class="brd_inf"><?php echo $info['art_nom'] ?></td>
    <td class="brd_inf"><?php echo $info['art_uni'] ?></td>
    <td class="brd_inf"><?php echo $info['art_pre'] ?></td>
    <td class="brd_inf"><?php echo $info['art_stk'] ?></td>
    <td class="brd_inf"><?php echo $info['catprod_cod'] ?></td>
    <!-- <td class="brd_inf"><?php echo $info['prov_cod'] ?></td>
    <td class="brd_inf"><?php echo $info['emp_cod'] ?></td>
-->
    <td class="brd_inf"><a href="index.php?controlador=personas&accion=editar&id=<?php echo $info['art_cod'] ?>">Editar</a></td>
    <td class="brd_inf"><a href="index.php?controlador=personas&accion=borrar&id=<?php echo $info['art_cod'] ?>">Borrar</a></td>
  </tr>
 
<?php } ?>
</table>
 <a href="menu.php">Regresar al Menu</a>
</body>
</html>