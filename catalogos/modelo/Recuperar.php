<?php
require("conexion.php");
$usuario=$_POST['usua'];
	$contraseña=$_POST['contraseña'];
	$Rcontraseña= $_POST['confirma'];
	$pregunta=$_POST['pregunta'];
	$respuesta =$_POST['respuesta'];



  if (!$con) 
  { 
    die("No se ha podido conectar a la BD: " . mysql_error()); 
  } 

$user = mysqli_query($con,"SELECT * FROM `registro` WHERE usuario='$usuario'");

    if($f = mysqli_fetch_array($user))
	{
		if($pregunta== $f['pregunta'])
		{
			
		if($respuesta== $f['respuesta'])
		{
			if($contraseña==$Rcontraseña){

				mysqli_query($con,"UPDATE `registro`  SET password = '$contraseña' WHERE usuario = '$usuario'");
			echo ' <script language="javascript">alert("Nueva contraseña registrada con exito");</script> ';
			echo "<script>location.href ='javascript:history.back()';</script>";
				
				
          }
			else{
				echo ' <script language="javascript">alert("Las contraseñas son incorrectas");</script> ';
			    echo "<script>location.href ='javascript:history.back()';</script>";
		     
		     }



		
		}else{
			echo '<script>alert("RESPUESTA INCORRECTA")</script>';
		
			echo "<script>location.href ='javascript:history.back()';</script>";
		}


		}else{
			echo '<script>alert("PREGUNTA INCORRECTA")</script>';
		echo "<script>location.href ='javascript:history.back()';</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href ='javascript:history.back()';</script>";

	}


mysqli_close($con);
		


?>