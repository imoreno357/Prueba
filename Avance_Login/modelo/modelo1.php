<?php
class libreria {
    var $conex;
    var $datos;
     function conectar($servidor,$usuario,$clave,$base){
        $this->conex=mysql_connect($servidor, $usuario, $clave)
                or die('Error en el servidor');
        mysql_select_db($base)
                or die('Error en la Base de datos');
        echo '<b>Conexion establecida correctamente</b><br>';
    }
    function insertar($sql){
        mysql_query($sql)or die('Error al insertar registro');
        echo '<b>Registro insertado correctamente</b><br>';
    }
    function consultar($sql){
        $this->datos=mysql_query($sql) 
                or die('Error en la consulta');
        $num_reg=  mysql_num_rows($this->datos);
        echo '<b>Numero de registros: '.$num_reg .'</b><br>';
    }
    function imprimir(){
        $num_campos=  mysql_num_fields($this->datos);
        echo '<table border=1>';
        echo '<tr bgcolor=orange>';
        for($i=0;$i<$num_campos;$i++){
          echo '<th>'.mysql_field_name($this->datos, $i) . '</th>';
        }
        echo '</tr>';
        while($registros=  mysql_fetch_array($this->datos)){
            echo '<tr>';
                for($i=0;$i<$num_campos;$i++){
                    echo '<td>'.$registros[$i].'</td>';
                }
            echo '</tr>';
        }
        echo '</table>';
    }
}//Fin de clase libreria
?>

