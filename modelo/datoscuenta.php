<?php  
require("conexion.php");
echo "<meta charset='utf-8'>";
    $id = $_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $Rcontraseña= $_POST['confirma'];
    $pregunta=$_POST['pregunta'];
    $respuesta =$_POST['respuesta'];
    $correo =$_POST['email'];

    $sql2 ="UPDATE `registro` SET `nombres`='$nombre',`apellido`='$apellido',`usuario`='$usuario',`password`='$contraseña',`pregunta`='$pregunta',`respuesta`= '$respuesta' ,`correo`= '$correo' WHERE idusuario = '$id'";


mysqli_query($con,$sql2);
echo "<script>alert('Se cambio con exito!'); location.href ='javascript:history.back()'; </script>";

?>