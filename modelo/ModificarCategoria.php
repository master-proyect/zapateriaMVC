<?php
require("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$observacion=$_POST['Observacion'];



$user = mysqli_query($con,"SELECT * FROM `categoria` WHERE idcategoria = '$id'");

if(mysqli_num_rows($user) == 0)
{

$con->query("INSERT INTO categoria VALUES('','$nombre','$tipo','$observacion')");
echo ' <script language="javascript">alert("Categoria registrada con exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 


}
else
{

mysqli_query($con,"UPDATE categoria SET `nombre` = '$nombre', `tipo` = '$tipo', `observacion` = '$observacion' WHERE idcategoria = '$id'");
echo ' <script language="javascript">alert("La Actualizacion fuen un exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>";
			
}

?>