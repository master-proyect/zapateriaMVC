<?php
require("conexion.php");
echo "<meta charset='utf-8'>";


session_start();
$usuario=$_POST['usua'];
	$pass=$_POST['cont'];


if (!$con) 
  { 
    die("No se ha podido conectar a la BD: " . mysql_error()); 
  } 

$user = mysqli_query($con,"SELECT * FROM `registro` WHERE usuario ='$usuario'");

if($f = mysqli_fetch_array($user))
	{
		if($pass==$f['password'])
		{
               
		     $_SESSION['idusuario'] = $f['idusuario'];
		     $_SESSION['usuario'] = $f['usuario'];
		
		
		echo "<script>alert('bienvenido $f[usuario] !');location.href ='javascript:history.back()'; </script>";
			
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
		
			echo "<script>location.href ='javascript:history.back()';</script>"; 
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href ='javascript:history.back()';</script>"; 

	}








	mysqli_close($con);




?>