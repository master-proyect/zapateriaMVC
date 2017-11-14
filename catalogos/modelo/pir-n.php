<?php
require 'conecc.php';
error_reporting(0);
$marca=$_POST['cn'];
if ($marca=="on") {

    $mr=  mysqli_query($conec,"SELECT * FROM cata WHERE tipo='Ns' AND marca='Puma'");
  while ($busqueda= mysqli_fetch_array($mr)) {
    $imagen =base64_encode($busqueda[imagen]);
    $tam= strlen($busqueda[descrip]);
    echo "
  <div class='card col s12 m6 l4 responsive'>

  <div class='card medium'>
  <div class='card-content  blue-grey lighten-2'>

    <span class='card-title white-text' >$busqueda[descrip]";
  if ($tam<20) {
  echo "<br>
  <br>


  ";
  }


    echo "
    </span>
  </div>

              <div class='card-image '>

                <img height='245'  class='responsive' src='data:image/jpg;base64,$imagen' >




              </div>

                <div class='card-action'>
                  <span>$ $busqueda[precio] Pesos </span>

                <form  action='vista/compra.php' method='post'>

                <input type='hidden' name='paso'  value='$busqueda[modelo]'>

                      <button type='submit' class='btn-floating  halfway-fab waves-effect waves-light red'><i class='material-icons'>add_shopping_cart</i></button>
                </form>
                    </div>

            </div>



  </div>
    ";



  }


}
 ?>
