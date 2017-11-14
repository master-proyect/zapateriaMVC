<?php
require("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$correo = $_POST['correo'];



$user = mysqli_query($con,"SELECT * FROM `proveedor` WHERE idproveedor = '$id'");

if(mysqli_num_rows($user) == 0)
{

$con->query("INSERT INTO proveedor VALUES('','$nombre','$telefono','$direccion','$correo')");
echo ' <script language="javascript">alert("proveedor registrado con exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 


}
else
{

mysqli_query($con,"UPDATE proveedor SET `nombre` = '$nombre', `telefono` = '$telefono', `direccion` = '$direccion', `correo` = '$correo' WHERE idproveedor = '$id'");
echo ' <script language="javascript">alert("La Actualizacion fuen un exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>";
			
}

?>