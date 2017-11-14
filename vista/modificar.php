<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>Cuenta</title>
  <script src="https://use.fontawesome.com/a2a6865dae.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript" src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<link rel="stylesheet" type="text/css" href="css/estiloindex.css">
</head>
<body>


<?php

require("Incabecera.php");
 ?>

                          
                
  <!-- Numero de procedimiento 
         Autor: Erik Geovanni Reynoso Lara
       Fecha: 11/09/2017
       Descripcion: Pantalla de login, recibe los datos del usuario para iniciar secion
       Modificacion:
       Fecha de modificacion: 
       Autor:    
       -->
 
      <div class=" col-mg-8 container">
          <?php
              error_reporting(0);
               require ('../modelo/conexion.php');      
               $id = $_REQUEST['id'];
              
                   
                        $user = mysqli_query($con,"SELECT * FROM `producto` WHERE idproducto='$id'");
                        $row = mysqli_fetch_row($user);

                    ?>
<form  method="POST" action="modelo/registro.php">
        
  

<label class="col-sm-6 "  for="formGroup"> <p>Nombre:</p></label>
<input class="form-control" value="<?php echo $row['1'];?>" name="nombre" type="text" required=""  >
<br>
<label class="col-sm-6"  for="formGroup"><p>Marca:</p></label>
<input class="form-control" value="<?php echo $row['2'];?>" name="marca" type="text" required=""  >
<br>
<label class="col-sm-6"  for="formGroup"><p>Talla:</p></label>
<input class="form-control" value="<?php echo $row['3'];?>" name="talla" type="text" required=""  >
<br>
<label class="col-sm-6"  for="formGroup"><p>Stock:</p></label>
<input class="form-control" value="<?php echo $row['5'];?>" name="stock" required="" type="text"   >
<br>
<label class="col-sm-6"  for="formGroup"><p>Precio:</p></label>
<input class="form-control" value="<?php echo $row['6'];?>" name="precio" required="" type="text" >
<br>
<label class="col-sm-6"  for="formGroup"><p>Observacion:</p></label>
<input class="form-control " value="<?php echo $row['7'];?>" name="observacion" type="text" >
<br>
<div class="modal-footer">
<input class="btn" type="submit" name="guardar" value="Aceptar">
<input class="btn"  type="reset" name="Borrar" value="Borrar">
</div>
         </form>
         
    </div>
   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>