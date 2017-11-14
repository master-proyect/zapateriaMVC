<?php 
/**
*@category Numero de procedimiento 04
*@author Angel Miguel Tah Canul
*@since 11/08/2017
*@version 0.1
*@internal cierra la seccion del usuario 
*/ 
session_start();

session_destroy();


header('Location: ../index.php')


?>