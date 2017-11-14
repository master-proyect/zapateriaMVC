<?php  

require("conexion.php");
$id = $_POST['id'];
$domicilio = $_POST['domi'];
$cp = $_POST['cp'];
$ciudad = $_POST['ciudad'];

    $sql2 ="UPDATE `registro` SET `domicilio`='$domicilio',`cp`='$cp',`ciudad`='$ciudad' WHERE idusuario = '$id'";


mysqli_query($con,$sql2);
echo "<script>alert('Se cambio con exito!'); location.href ='javascript:history.back()'; </script>";



?>