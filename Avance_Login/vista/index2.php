<?php
# !empty($_GET['controlador'])
#----------------------------
  
  


if(isset($_GET['controlador'])){
    $controlador=$_GET['controlador']."Controlador";
}else{
    $controlador='personasControlador';
}
#----------------------------
if(isset($_GET['accion'])){
    $accion=$_GET['accion'];
}else{
    $accion='listarC';
}
#----------------------------
#echo $controlador . ":". $accion;
include("../controlador/$controlador". ".php");
$web=new $controlador;
$web->$accion();


?>