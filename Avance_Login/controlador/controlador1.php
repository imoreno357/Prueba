<?php
include('../modelo/modelo1.php');
include ('..modelo/personasModelo.php');
$cnx=mysql_connect('localhost','root','')
            or die('Error en la conexion');
    mysql_select_db('bdinventario',$cnx)
            or die('Error en la Base de datos');   
$user=$_POST['user'];
$pass=$_POST['password'];
$sql="select * from usuario where usuario='$user' and clave='$pass'";
    $datos=mysql_query($sql)or die('Error en la consulta');
    $num_registros= mysql_num_rows($datos);
if($num_registros==1)
{
$dato=$_POST['codigo'];
session_start();
if($_SESSION['codigo']==$dato){
    header('location:../vista/menu.php');
    $_SESSION['autorizado']='ok';   
}else{ 
    header('location:../vista/login.php');
    session_destroy();
}    
}else
{
   header('location:../vista/login.php');
   session_destroy();



 }
?>
