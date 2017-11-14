<?php
error_reporting(0);
session_start();
$paso = $_POST['paso'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->


<link rel="stylesheet" type="text/css" href="estilolete.css">
   <link rel="stylesheet" type="text/css" href="CSS/estilo2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script type="text/javascript" src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://use.fontawesome.com/a2a6865dae.js"></script>
    <meta charset="utf-8">
    <title></title>
    <?php
    require'nav.php';
require '../modelo/conecc.php';
$compra = mysqli_query($conec,"SELECT *FROM cata Where modelo='$paso'");
while ($encon = mysqli_fetch_array($compra)) {

$image=base64_encode( $encon['imagen']);


    ?>

  </head>
  <body background="fondo.jpg">
    <div class=" container ">
      <br>
        <div class="chip" >
      <a href="#"><i class="fa fa-home" aria-hidden="true"> Inicio </i>
      </a>
        </div>
        <div class="chip">
          <a href="../catalogoindex.php"> <i class="fa fa-man " aria-hidden="true"> Hombres </i></a>
        </div>

      <div class="chip">
        <a href="#"> <?php echo $encon['descrip'];  ?></a>
      </div>
        <br>
        <div class="row" >
          <div class="col s12 m12 l5 " style="background-color:white;">
          <?php echo "<img class='materialboxed' style='  width:100%;'  src='data:image/jpg;base64,$image' >";?>
          </div>
        
<div class="col s12 m12 l1">

</div>

  <div style="border-radius: 7px 7px 7px 7px;" class="col s12 m12 l5 input-field card-panel ">

    <h4 style="font-family :Impact, Charcoal, sans-serif"><?php echo$encon['descrip']; ?></h4>

    <h6 style="font-style: italic;">Modelo : <?php echo$encon['modelo'];  ?></h6>

      <h6 style="font-style: italic;">------ Marca : <?php echo$encon['marca'];  ?>   ------      Precio: $ <?php echo$encon['precio'];  ?> pesos ------</h6>
<br>
<h6 style="font-style: italic;"> Hombres </h6>
<br>
<h6 style="font-style: italic;"> Tallas Disponibles</h6>
<?php
echo "<button type='button' name='button' class='btn'> $encon[talla] </button>
";

 ?>

<br>
<p>_____________________________________________</p>
<br>

<form method="POST" action="../../modelo/botoncarrito.php">
<?php 

echo "<input type='hidden' name='modelo' value='$encon[modelo]'/>
            <input type='hidden' name='descrip' value='$encon[descrip]/'>
            <input type='hidden' name='precio' value='$encon[precio]'/>
            <input type='hidden' name='talla' value='$encon[talla]'/>
"; 
}
     
?>
<button type="submit" class="btn" name="button">Añadir al Carrito</button>

</form>
<br>
<br>
  </div>
</div>



    </div>

    <?php

require'piepagina.php';

?>



  </body>
<link rel="stylesheet" href="materialize/css/materialize.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../vista/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="../vista/materialize/js/materialize.js"></script>
</html>
