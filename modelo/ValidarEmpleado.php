<?php
/**
*@category Numero de procedimiento 04
*@author Erik Geovanni Reynoso Lara
*@since 11/08/2017
*@version 0.1
*@internal Recibe los datos para poder validarlo
*/
require("conexion.php");
echo "<meta charset='utf-8'>";


session_start();
$nom=$_POST['nombre'];
$car=$_POST['cargo'];
$cod=$_POST['codigo'];


if (!$con) 
  { 
    die("No se ha podido conectar a la BD: " . mysql_error()); 
  } 

$user = mysqli_query($con,"SELECT * FROM `usuario` WHERE cargo ='$car'");

if($f=mysqli_fetch_array($user))
	{
		if($cod==$f['codigo'])
		{
               
		     $_SESSION['idusuario'] = $f['idusuario'];
		     $_SESSION['usuario'] = $f['cargo'];
		
		
		echo "<script>alert('bienvenido $f[nombre] !');location.href ='../vista/inventario.php'; </script>";
		
			
		}else{
			echo '<script>alert("El codigo es incorrecto")</script>';
		
			echo "<script>location.href ='javascript:history.back()';</script>"; 
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href ='javascript:history.back()';</script>"; 

	}
	mysqli_close($con);
?>