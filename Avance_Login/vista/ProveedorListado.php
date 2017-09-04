<html><head><title>php</title>
<link href="css/mvc_styles.css" rel="stylesheet" type="text/css">
<link href="vistas/css/mvc_styles.css" rel="stylesheet" type="text/css"></head>
<body>
<a href="index3.php?controlador=personas&accion=nuevoP">Agregar Nuevo Proveedor</a>
 <a href="menu.php">Atras</a>
<br/>
<br/>
<table width="550" cellpadding="1" cellspacing="1" class="tabla_01">
  <tr>
        <th scope="col">Codigo</th><th scope="col">Nombre</th>
    <th scope="col">Telefono</th><th scope="col">Direccion</th>
    
   
    <th scope="col">Editar</th> <th scope="col">Borrar</th>
  </tr>
  <?php foreach($data as $info){?>
  <tr onMouseOver="this.className='fila_activa'" 
      onMouseOut="this.className='fila_normal'">
    <td class="brd_inf"><?php echo $info['prov_cod'] ?></td>
    <td class="brd_inf"><?php echo $info['prov_nom'] ?></td>
    <td class="brd_inf"><?php echo $info['prov_telf'] ?></td>
    <td class="brd_inf"><?php echo $info['prov_dir'] ?></td>
   

    <td class="brd_inf"><a href="index3.php?controlador=personas&accion=editarP&id=
        <?php echo $info['prov_cod'] ?>">Editar</a></td>
    <td class="brd_inf"><a href="index3.php?controlador=personas&accion=borrarP&id=
        <?php echo $info['prov_cod'] ?>">Borrar</a></td>
  </tr>
 
<?php } ?>
</table>
 <a href="menu.php">Regresar al Menu</a>
</body>
</html>