<?php  
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->




<script src="https://use.fontawesome.com/a2a6865dae.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="controlador/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vista/estilolete.css">
   <link rel="stylesheet" type="text/css" href="vista/CSS/estilo2.css">

    <script src="https://use.fontawesome.com/a2a6865dae.js"></script>
    <meta charset="utf-8">
    <title>Niños</title>


  <?php include 'controlador/ninios.php'; ?>

  </head>
  <body background='vista/fondo.jpg' >

<?php
 require 'vista/nava.php';

require 'vista/cuerponinios.php';
echo "  </div></body>";
require'vista/piepagina.php';
?>










  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="vista/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="vista/materialize/js/materialize.js"></script>
</html>
