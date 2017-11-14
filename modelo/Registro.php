<?php
/**
*@category Numero de procedimiento 04
*@author Erik Geovanni Reynoso Lara
*@since 11/08/2017
*@version 0.1
*@internal recibe los datos e inserta en base de datos
*/
require("conexion.php");
echo "<meta charset='utf-8'>";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $Rcontraseña= $_POST['confirma'];
    $pregunta=$_POST['pregunta'];
    $respuesta =$_POST['respuesta'];
    $correo =$_POST['email'];

  if (!$con) 
  { 
    die("No se ha podido conectar a la BD: " . mysql_error()); 
  } 

$user = mysqli_query($con,"SELECT * FROM `registro` WHERE usuario='$usuario'");

if(mysqli_num_rows($user) == 0)
{
if($contraseña==$Rcontraseña){
$con->query("INSERT INTO registro VALUES('','$nombre','$apellido','$usuario','$contraseña','$pregunta','$respuesta','$correo')");
mysqli_close($con);
$user = mysqli_query($con,"SELECT * FROM `registro` WHERE usuario='$usuario'");

$encon = mysqli_fetch_array($user);
$con->query("INSERT INTO `domicilios`(`idusuario`) VALUES ('$encon[0]')");
mysqli_close($con);


echo ' <script language="javascript">alert("Usuario registrado con exito");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 
}
  else
 {

 echo ' <script language="javascript">alert("Las contraseñas son incorrecta");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 
  }

  }
  else
     {

      echo ' <script language="javascript">alert("Atencion, ya existe el nombre designado para un usuario, verifique sus datos");</script> ';
 echo "<script>location.href ='javascript:history.back()';</script>"; 

     }
?>