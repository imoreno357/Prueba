<?php
session_start();
if($_SESSION['autorizado']!='ok'){
    session_destroy();
    header('location:../vista/login.php');
}
?>
