<?php
require("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$numero=$_POST['numero'];
$cargo=$_POST['cargo'];
$codigo = $_POST['codigo'];
$segundo = $_POST['segundocodigo'];
$observacion = $_POST['observacion'];


$user = mysqli_query($con,"SELECT * FROM `usuario` WHERE idusuario = '$id'");

if(mysqli_num_rows($user) == 0)
{

if ($codigo == $segundo) 
{
$con->query("INSERT INTO usuario VALUES('','$nombre','$cargo','$codigo','$numeroempleado','$observacion')");

echo ' <script language="javascript">alert("Usuario registrado con exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 

}
else
{
echo ' <script language="javascript">alert("Codigos ingresados son incorrectos");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 

}
}
else
{
if($segundo == $codigo )
{
mysqli_query($con,"UPDATE usuario SET `nombre` = '$nombre', `cargo` = '$cargo', `codigo` = '$codigo', `numeroempleado` = '$numero', `observacion` = '$observacion' WHERE idusuario = '$id'");
echo ' <script language="javascript">alert("La Actualizacion fuen un exito");</script> ';
	echo "<script>location.href ='javascript:history.back()';</script>";
				
				
}
else{
		echo ' <script language="javascript">alert("Codigos ingresados son incorrectos");</script> ';
		 echo "<script>location.href ='javascript:history.back()';</script>";		
		     
	   }


}

?>
