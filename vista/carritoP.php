<?php  
session_start();
  if ( !isset($_SESSION['usuario'])) {
     echo "<script>alert('Debe iniciar sesion para ver su cuenta'); window.location.assign('index.php') </script>";
  }else if( !isset($_SESSION['carrito']) ){
         echo "<script>alert('NO tiene productos en su carrito'); window.location.assign('index.php') </script>";
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
<link rel="stylesheet" type="text/css" href="css/estilonavbar.css">
</head>
<body>
<?php  
 require('nava.php');
?>

<div class="container">
<div class="breadcrumb col-xs-3 col-sm-2 col-md-2">

  <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
  <li class="breadcrumb-item active"> Su pago</li>

			</div>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <h3>PRODUCTOS EN SU CARRITO</h3>
  <hr>
  </div>
<div class="breadcrumb col-xs-12 col-sm-12 col-md-12">

  <li class="breadcrumb-item"><a href=""><span><em>01.</em> Resumen</span></a></li>
  <li class="breadcrumb-item"><a href=""><span><span><em>02.</em> Dirección</span></a></li>
  <li class="breadcrumb-item"><a href=""><span><span><em>03.</em> Transporte</span></a></li>
  <li class="breadcrumb-item active"><span><span><em>04.</em> Pago</span></li>

<div id="paypal-express-checkout" class="payment_module">
                       <form id="paypal-express-checkout-form" class="well box-security " action="https://tiendapirma.mx/module/paypalmx/expresscheckout?pp_exp_initial=1" method="post" onsubmit="$('#paypal_express_checkout_id_product_attribute').val($('#idCombination').val());                      $('#paypal_express_checkout_quantity').val($('#quantity_wanted').val());">
                                                    <input id="paypal-express-checkout-btn-product" type="image" name="submit" src="../imagenes/accpmark_tarjdeb_mx.png" alt="">
                            </form>
                    </div>

<a href="../modelo/terminocompra.php">Finalizo compra</a>
<a href="../index.php"> <-Volver al inicio</a>
</div>

</div>



<?php  
 require('pie.php');
?>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>