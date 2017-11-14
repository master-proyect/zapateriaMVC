<?php error_reporting(0);
require 'conecc.php';
$valor=$_POST['q'];
$valor2= $_POST['m'];
$talla= $_POST['t'];
$marca=$_POST['mar'];



if ($talla == 13 ||$talla == 13.5||$talla == 14 ||$talla == 14.5||$talla == 15 ||$talla == 15.5||$talla == 16 ||$talla == 16.5||$talla == 17 ||$talla == 17.5||$talla == 18 ||$talla == 18.5||$talla == 19||$talla == 19.5||$talla == 20||$talla == 20.5 ||$talla == 21||$talla == 21.5||$talla == 22||$talla == 22.5||$talla == 23) {

  $talla=  mysqli_query($conec,"SELECT * FROM cata WHERE tipo='Ns' AND talla ='$talla'");
  while ($busqueda= mysqli_fetch_array($talla)) {
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
if ($valor == "on") {
  $preciobajo=  mysqli_query($conec,"SELECT * FROM cata WHERE tipo='Ns' order by precio");
  while ($busqueda= mysqli_fetch_array($preciobajo)) {
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
}else if ($valor2=="on")
  {
    $catalogodehombres=  mysqli_query($conec,"SELECT * FROM cata WHERE tipo='Ns' order by precio desc ");
    while ($busqueda= mysqli_fetch_array($catalogodehombres)) {
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
