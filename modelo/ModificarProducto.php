
<?php
require("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$talla=$_POST['talla'];
$imagen = $_POST['imagen'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];
$observacion = $_POST['observacion'];
$categoria = $_POST['categoria'];
$proveedor = $_POST['proveedor'];



$user = mysqli_query($con,"SELECT * FROM `producto` WHERE idproducto = '$id'");

if(mysqli_num_rows($user) == 0)
{

$con->query("INSERT INTO producto VALUES('','$nombre','$marca','$talla','$imagen','$stock','$precio','$observacion','$categoria','$observacion')");

echo ' <script language="javascript">alert("Usuario registrado con exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 


}
else
{

mysqli_query($con,"UPDATE producto SET `nombre` = '$nombre', `marca` = '$marca', `talla` = '$talla', `foto` = '$imagen', `stock` = '$stock',`precio` = '$precio',`observacion` = '$observacion',`idcategoria` = '$categoria',`idproveedor` = '$proveedor'  WHERE idusuario = '$id'");
echo ' <script language="javascript">alert("La Actualizacion fuen un exito");</script> ';
	echo "<script>location.href ='javascript:history.back()';</script>";
				


}

?>