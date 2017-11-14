<?php  
session_start();
  if ( !isset($_SESSION['usuario'])) {
     echo "<script>alert('Debe iniciar sesion para ver su cuenta'); window.location.assign('index.php') </script>";
  }



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Carrito</title>
	<script src="https://use.fontawesome.com/a2a6865dae.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script type="text/javascript" src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
  <script type="text/javascript" src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<link rel="stylesheet" type="text/css" href="../css/estilonavbar.css">
</head>
<body>
<?php  
 require('nava.php');
?>

<div class="container">
<div class="breadcrumb col-xs-3 col-sm-2 col-md-2">

  <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
  <li class="breadcrumb-item active"> Su direccion</li>

			</div>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <h3>PRODUCTOS EN SU CARRITO</h3>
  <hr>
  </div>
<div class="breadcrumb col-xs-12 col-sm-12 col-md-12">

  <li class="breadcrumb-item"><a href=""><span><em>01.</em> Resumen</span></a></li>
  <li class="breadcrumb-item active"><span><span><em>02.</em> Dirección</span></li>
  <li class="breadcrumb-item"><span><span><em>03.</em> Transporte</span></li>
  <li class="breadcrumb-item"><span><span><em>04.</em> Pago</span></li>
<?php  

 if (isset($_SESSION["carrito"])) {
     
     echo "<table class='table table-hover'>";
     echo "<tr>";
     echo "<th>Modelo</th>";
     echo "<th>Descripcion</th>";
     echo "<th>Talla</th>";
     echo "<th>cantidad</th>";
     echo "<th>precio</th>";
     echo "</tr>";

     $total = 0;
     foreach ($_SESSION["carrito"] as $p) {
     echo "<tr>";
     echo "<td>".$p["modelo"]."</td>";
     echo "<td>".$p["descripcion"]."</td>";
     echo "<td>".$p["talla"]."</td>";
    echo "<td>1</td>";
     echo "<td>$".$p["precio"]."</td>";
     $total += $p["precio"];
     echo "</tr>";
     }
       echo "<tr>";
       echo "<td colspan ='4'  >Costo de envio: </td>";
       echo "<td>$110</td>";
       echo "</tr>";
       echo "<tr class='active'>";
       $total =  $total + 110;
       echo "<td colspan ='4'  >Total: </td>";
       echo "<td>$$total</td>";
       echo "</tr>";
        echo "<tr>";
       echo "<td colspan ='4'  ></td>";
       ?>
       <form method="post" action="carritoD.php">

       	<td><input class='btn btn-success' type='submit' value='COMPRAR'></td>

       </form>
       
       <?php
      
       echo "</tr>";
       echo "<tr>";
     echo "</table>"; 
     echo "";
    
  }else{

     echo "<p class='alert alert-warning'>Su carrito está vacío</p>"; 

  }



?>

</div>
</div>

<?php  
 require('pie.php');
?>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>