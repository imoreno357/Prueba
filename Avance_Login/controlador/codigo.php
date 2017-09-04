<?php

class codigo
{
   var $codigo;
   function genera (){
       session_start();
       $patron=session_id();
       $c1=substr($patron,  mt_rand(1,strlen($patron)-1),1);
       $c2=substr($patron,  mt_rand(1,strlen($patron)-1),1);
       $c3=substr($patron,  mt_rand(1,strlen($patron)-1),1);
       $c4=substr($patron,  mt_rand(1,strlen($patron)-1),1);
       $c5=substr($patron,  mt_rand(1,strlen($patron)-1),1);
       $c6=substr($patron,  mt_rand(1,strlen($patron)-1),1);
       $this->codigo="$c1$c2$c3$c4$c5$c6";
       
       //echo $patron.'<br>'; no vale
       //echo $c1.$c2.$c3.$c4.$c5.$c6; no vale       
   }
   // 80 == anccho // 30 == altura
   function graficar(){
       header("content-type:image/png");
       $im=imagecreate(80, 30);
       $azul= imagecolorallocate($im,0, 0, 255);
       $blanco=  imagecolorallocate($im, 255, 255, 255);
       imagefill($im, 0, 0, $azul);
       imagestring($im, 6, 10, 10, $this->codigo,$blanco);
       imagepng($im);
       imagedestroy($im);
       $_SESSION['codigo']=$this->codigo;
       
     }
 }
$obj=new codigo();
$obj->genera();
$obj->graficar();

?>
