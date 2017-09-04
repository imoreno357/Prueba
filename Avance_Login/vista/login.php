

<html lang="es">
<head><title>Gestion de inventario</title>
    
    <link type="text/css" href="../vista/css/estilos.css" rel="stylesheet" />
    </head>
    
    <body><h1><center>GESTION DE INVENTARIO</center></h1>
        <div id="registrar">
</div>
 
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera"  > 
                <h2>Login</h2>
            </div>
 
            <div id="cuerpo">
                <form action="../controlador/controlador1.php" method="post" id="form-login" action="" autocomplete="off">
                    <!--A saber, el atributo for funciona como el id.-->
                    <!--ejemplo <label for="usuario">Usuario:</label>-->
                    <!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
                    <p><label >Usuario:</label></p>
                        <input type="text" name="user" id="usuario" placeholder="Ingrese Usuario" autofocus="" required=""></p>
 
                    <p><label>Contraseña:</label></p>
                        <input type="password" name="password" id="contrasenia" placeholder="Ingrese Password" required=""></p>
 
                    <p><label>Imagen:</label></p>
                        <image src="../controlador/codigo.php"></p>
                        
                    <p><label>Codigo:</label></p>
                        <input type="text" name="codigo" value="" placeholder="Ingrese Codigo" required=""></p>
                        
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                    
                    
                </form>
            </div>
 
            <div id="pie">Sistema de Login Y Registro</div>
        </div>
    </div>
             
    </body>
</html>
        
        
 
