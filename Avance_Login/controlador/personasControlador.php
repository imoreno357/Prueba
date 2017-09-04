<?php

//ARTICULOSSSSS
class personasControlador{
    
    
 
    public function listar(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $data=$tmp->personasListar();
        #Presentando los datos
        include('../vista/personasListado.php');
    }
    public function nuevo(){
        include('../vista/Registrar_articulo.php');
    }
    public function insertar(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasInsertar();

        if($exito==1){
            $data=$tmp->personasListar();
            include('../vista/personasListado.php');
        }else{
            echo "error al insertar";
        }
    }
    public function editar(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $persona_datos=$tmp->personasSeleccionar($_GET['id']);
        include('../vista/personasEdicion.php');
    }
    public function actualizar(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasActualizar();
        if($exito==1){
            $data=$tmp->personasListar();
            include('../vista/personasListado.php');
        }else{
            echo "Error al actualizar ";
        }
    }
    public function borrar(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasBorrar();
        if($exito==1){
            $data=$tmp->personasListar();
            include('../vista/personasListado.php');
        }else{
            echo "Error al Borrar ";
        }
    }	



//CATEGORIA


public function listarC(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $data=$tmp->personasListarC();
        #Presentando los datos
        include('../vista/CategoriaListado.php');
    }
    public function nuevoC(){
        include('../vista/Registrar_Categoria.php');
    }
    public function insertarC(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasInsertarC();

        if($exito==1){
            $data=$tmp->personasListarC();
            include('../vista/CategoriaListado.php');
        }else{
            echo "error al insertar";
        }
    }
    
    
    public function editarC(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo();
        $persona_datosC=$tmp->personasSeleccionarC($_GET['id']);
        include('../vista/CategoriaEdicion.php');
    }
    public function actualizarC(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasActualizarC();
        if($exito==1){
            $data=$tmp->personasListarC();
            include('../vista/CategoriaListado.php');
        }else{
            echo "Error al actualizar ";
        }
    }
    public function borrarC(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasBorrarC();
        if($exito==1){
            $data=$tmp->personasListarC();
            include('../vista/CategoriaListado.php');
        }else{
            echo "Error al Borrar ";
        }
    }	
//PROVEEDOR
    
    
        public function listarP(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $data=$tmp->personasListarP();
        #Presentando los datos
        include('../vista/ProveedorListado.php');
    }
    public function nuevoP(){
        include('../vista/Registrar_Proveedor.php');
    }
    public function insertarP(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasInsertarP();

        if($exito==1){
            $data=$tmp->personasListarP();
            include('../vista/ProveedorListado.php');
        }else{
            echo "error al insertar";
        }
    }
    public function editarP(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $persona_datos=$tmp->personasSeleccionarP($_GET['id']);
        include('../vista/ProveedorEdicion.php');
    }
    public function actualizarP(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasActualizarP();
        if($exito==1){
            $data=$tmp->personasListarP();
            include('../vista/ProveedorListado.php');
        }else{
            echo "Error al actualizar ";
        }
    }
    public function borrarP(){
        include('../modelo/personasModelo.php');
        $tmp=new personasModelo;
        $exito=$tmp->personasBorrarP();
        if($exito==1){
            $data=$tmp->personasListarP();
            include('../vista/ProveedorListado.php');
        }else{
            echo "Error al Borrar ";
        }
    }	
    
    
    
    
    
    
    
    
}

?>
