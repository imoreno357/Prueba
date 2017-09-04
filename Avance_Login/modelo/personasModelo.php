<?php
include('../libs/BaseClass.php');
class personasModelo extends BaseDatos{
    
   
    
   
    
    public function personasListar(){
        $sql="select * from Articulos";
        return $this->db_consultar($sql);
    }
    public function personasInsertar(){
        $campos="";
        $valores="";
        foreach($_POST as $campo=>$valor){
            if(strtolower(trim($campo))!="submit"){
                $campos.=$campo.",";
                $valores.="'" . $valor ."',";
            }   
        }
        $campos=substr($campos,0,strlen($campos)-1);
        $valores=substr($valores,0,strlen($valores)-1);
        $sql="insert into Articulos ($campos) values($valores)";
        return $this->db_ejecutar($sql);
    }
    
   
    public function personasSeleccionar($id){
        $sql="select * from Articulos where art_cod=$id";
        $tempo=$this->db_consultar($sql);
        return $tempo[0];
    }
    public function personasActualizar(){
        $cadena="";
        foreach($_POST as $campo=>$valor){
            if(strtolower(trim($campo))!="submit"){
                $cadena.="$campo='$valor',";
            }
        }
        $cadena=substr($cadena,0,strlen($cadena)-1);
        $sql="update Articulos set $cadena where art_cod=". $_GET['id'];
        return $this->db_ejecutar($sql);
    }
    public function personasBorrar(){
        $sql="delete from Articulos where art_cod=" . $_GET['id'];
        return $this->db_ejecutar($sql);
    }
    
    //CATEGORIASSSSS
    
     public function personasListarC(){
        $sql="select * from categoria_producto";
        return $this->db_consultar($sql);
    }
    
        public function personasInsertarC(){
        $campos="";
        $valores="";
        foreach($_POST as $campo=>$valor){
            if(strtolower(trim($campo))!="submit"){
                $campos.=$campo.",";
                $valores.="'" . $valor ."',";
            }   
        }
        $campos=substr($campos,0,strlen($campos)-1);
        $valores=substr($valores,0,strlen($valores)-1);
        $sql="insert into categoria_producto ($campos) values($valores)";
        return $this->db_ejecutar($sql);
    }
    
    
    public function personasSeleccionarC($id){
        $sql="select * from categoria_producto where catprod_cod='$id'";
        $tempo=$this->db_consultar($sql);
        return $tempo[0];
    }
    public function personasActualizarC(){
        $cadena="";
        foreach($_POST as $campo=>$valor){
            if(strtolower(trim($campo))!="submit"){
                $cadena.="$campo='$valor',";
            }
        }
        $cadena=substr($cadena,0,strlen($cadena)-1);
        $sql="update categoria_producto set $cadena where catprod_cod=". $_GET['id'];
        return $this->db_ejecutar($sql);
    }
    public function personasBorrarC(){
        $sql="delete from categoria_producto where catprod_cod=" . $_GET['id'];
        return $this->db_ejecutar($sql);
    }
    
    //PROVEEDOR
    PUblic function personasListarP(){
        $sql="select * from proveedor";
        return $this->db_consultar($sql);
    }
    public function personasInsertarP(){
        $campos="";
        $valores="";
        foreach($_POST as $campo=>$valor){
            if(strtolower(trim($campo))!="submit"){
                $campos.=$campo.",";
                $valores.="'" . $valor ."',";
            }   
        }
        $campos=substr($campos,0,strlen($campos)-1);
        $valores=substr($valores,0,strlen($valores)-1);
        $sql="insert into proveedor ($campos) values($valores)";
        return $this->db_ejecutar($sql);
    }
    
   
    public function personasSeleccionarP($id){
        $sql="select * from proveedor where prov_cod=$id";
        $tempo=$this->db_consultar($sql);
        return $tempo[0];
    }
    public function personasActualizarP(){
        $cadena="";
        foreach($_POST as $campo=>$valor){
            if(strtolower(trim($campo))!="submit"){
                $cadena.="$campo='$valor',";
            }
        }
        $cadena=substr($cadena,0,strlen($cadena)-1);
        $sql="update proveedor set $cadena where prov_cod=". $_GET['id'];
        return $this->db_ejecutar($sql);
    }
    public function personasBorrarP(){
        $sql="delete from proveedor where prov_cod=" . $_GET['id'];
        return $this->db_ejecutar($sql);
    }
 
}
?>