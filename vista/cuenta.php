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
	<title>Cuenta</title>
	<script src="https://use.fontawesome.com/a2a6865dae.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
  <li class="breadcrumb-item active"> MI Cuenta</li>

			</div>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <h3>MI CUENTA</h3>
  <hr>
  <span class="label label-default">Bienvenido a su cuenta. Aquí usted puede administrar toda su información personal y los pedidos.</span>

  </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<br>
<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#historia"><i class="fa fa-list-ol" aria-hidden="true"> Historia y los detalles del pedido</i></button>

<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#direcciones"><i class="fa fa-building" aria-hidden="true"> Mi direccion</i></button>

<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#datos"><i class="fa fa-user" aria-hidden="true"> Mis datos personales</i></button>
<hr>
</div>
</div>
<?php  
require("../modelo/conexion.php");

     $usuario = $_SESSION['usuario'];
     $user = mysqli_query($con,"SELECT * FROM `registro` WHERE usuario ='$usuario'");

   $f = mysqli_fetch_array($user);
   $historial = mysqli_query($con,"SELECT * FROM `ventas` WHERE idusuario ='$f[idusuario]'");
   $checa=mysqli_num_rows($historial);
   

?>
<!-- Modal -->
<div id="historia" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-list-ol" aria-hidden="true"> Historia y los detalles del pedido</i></h4>
      </div>
      <div class="modal-body">
        <?php  
         if ($checa != 0) {
            while ($h = mysqli_fetch_array($historial)){
              $numvent = 1;
              ?>
              <table class="table table-hover table-responsive">
              <tr class="active">
              <th>#</th>
              <th>Modelo</th>
              <th>Precio</th>
              <th>Fecha</th>
              </tr>
                <tr>
                  <td><?php echo "$numvent";  ?></td>
                  <td><?php echo "$h[modelo]";  ?></td>
                  <td><?php echo "$h[precio]";  ?></td>
                  <td><?php echo "$h[fecha]";  ?></td>
                </tr>
              </table>
              <?php
              $numvent = $numvent + 1;
            }
         }else{
           echo "<p class='alert alert-warning'>Su carrito está vacío</p>"; 


         }

        ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>


<div id="direcciones" class="modal fade" role="dialog">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-building" aria-hidden="true"> Mi direccion</i></h4>
      </div>
      <div class="modal-body">
      <form method="POST" action="../modelo/cambiodedomicilio.php">
                <?php  
         echo "<label class='col-sm-6 control-label'  for='formGroup'> <p>Domicilio:</p></label>
         <input class='form-control' name='id' type='hidden' value = '$f[idusuario]'>
       <input class='form-control' name='domi' type='text' value = '$f[domicilio]' required=''  >
       <label class='col-sm-6 control-label'  for='formGroup'> <p>Codigo Postal:</p></label>
       <input class='form-control' name='cp' type='text' value = '$f[cp]' required=''  >
       <label class='col-sm-6 control-label'  for='formGroup'> <p>Ciudad</p></label>
       <input class='form-control' name='ciudad' type='text' value = '$f[ciudad]' required=''  >
       ";
       
        ?>
         <div class="modal-footer">
     <input class="btn btn-success" type="submit" name="guardar" value="Guardar">
    
      </div>
      </form>

      </div>
    </div>

  </div>
</div>


<div id="datos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-user" aria-hidden="true"> Mis datos personales</i></h4>
      </div>
      <div class="modal-body">
       <form  method="POST" action="datoscuenta.php">
        
  <?php 


       
echo "<label class='col-sm-6 control-label'  for='formGroup'> <p>Nombres:</p></label>
<input class='form-control' name='id' type='hidden' value = '$f[idusuario]'>
       <input class='form-control' name='nombre' type='text' value = '$f[nombres]' required=''  >
      <label class='col-sm-6 control-label'  for='formGroup'><p>Apellidos:</p></label>
<input class='form-control' name='apellido' type='text' required='' value='$f[apellido]'  >
<label class='col-sm-6 control-label'  for='formGroup'><p>Correo:</p></label>
<input class='form-control' name='email' required='' value='$f[correo]' type='email'  >

       ";
       


   ?>
<label class="col-sm-6 control-label"  for="formGroup"><p>Contraseña:</p></label>
<input class="form-control" name="contraseña" required="" type="password"   >
<label class="col-sm-6 control-label"  for="formGroup"><p>Confirmar Contraseña:</p></label>
<input class="form-control" name="confirma" required="" type="password" >
<label class="col-sm-6 control-label"  for="formGroup"><p>Pregunta de seguridad:</p></label>
 <select class= "form-control" name="pregunta">
  <option value="mascota"><p>¿Nombre de primer mascota?</p></option>
  <option value="lugar"><p>¿Lugar donde se conocieron tus padres?</p></option>
  <option value="amigo"><p>¿Nombre de tu mejor amigo?</p></option>

</select>
<label class="col-sm-6 control-label"  for="formGroup"><p>Respuesta:</p></label>
<input class="form-control " name="respuesta" type="text" >

     <div class="modal-footer">
     <input class="btn btn-success" type="submit" name="guardar" value="Guardar">
    
      </div>
         </form>
      </div>
    </div>

  </div>
</div>

<?php  
 require('pie.php');
?>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>