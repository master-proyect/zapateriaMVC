<?php

error_reporting(0); 
require ('conexion.php');
    
$id = $_REQUEST['idd'];
$user = mysqli_query($con,"DELETE FROM `producto` WHERE idproducto='$id'");

echo ' <script language="javascript">alert("Eliminacion exitosa");</script> ';
echo "<script>location.href ='javascript:history.back()';</script>"; 


?>