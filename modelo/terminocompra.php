<?php  
require("conexion.php");
session_start();
date_default_timezone_set('UTC');



$id = $_SESSION['idusuario'];
$fechaActual = date("Y-m-d");

 foreach ($_SESSION["carrito"] as $p) {

    $user = mysqli_query($con,"INSERT INTO `ventas`(`idusuario`, `modelo`, `cantidad`, `precio`, `fecha`) VALUES ('$id','$p[modelo]','1','$p[precio]','$fechaActual')");
      

     }


?>