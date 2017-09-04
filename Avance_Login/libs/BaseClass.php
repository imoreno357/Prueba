<?php
class BaseDatos{
private $cnx;
public function __construct(){
}
private function db_conectar(){
  $this->cnx= new PDO('mysql:host=localhost;dbname=bdinventario','root','');
}
public function db_consultar($sql){
   $this->db_conectar();
   $consulta=$this->cnx->prepare($sql);
   $consulta->execute();
   while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
    $salida[]=$fila;
   }
   return $salida;
   $this->db_desconectar();
    }
public function db_ejecutar($sql){
   $this->db_conectar();
   $consulta=$this->cnx->prepare($sql);
   $afectados=$consulta->execute();
   if($afectados>0){
        return true;
   }else{
        return false;
   }
   $this->db_desconectar();
}
private function db_desconectar(){
       $this->cnx=null;
    }
    
    
   
    
    
    
}
?>