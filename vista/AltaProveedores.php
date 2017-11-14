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

require ('../modelo/conexion.php');
error_reporting(0);     
$id = $_REQUEST['idd'];
$user = mysqli_query($con,"SELECT * FROM `proveedor` WHERE idproveedor='$id'");
$row = mysqli_fetch_row($user);

                    
?>

<div class="col-md-12 container">
<form  method="POST" action="../modelo/ModificarProveedor.php">
<div class="col-md-2">
<label for="formGroup"> <p>Id Proveedor:</p></label>
<input class="form-control" value="<?php echo $row['0'];?>" name="id" readonly="readonly" type="text" required=""  >
</div>
<div class="col-md-2">
<label for="formGroup"> <p>Nombre:</p></label>
<input class="form-control" value="<?php echo $row['1'];?>" name="nombre" type="text" required=""  >
</div>

<div class="col-md-2">
<label for="formGroup"> <p>Telefono:</p></label>
<input class="form-control" value="<?php echo $row['2'];?>" name="telefono" type="text" required=""  >
</div>

<div class="col-md-2">
<label for="formGroup"> <p>Direccion:</p></label>
<input class="form-control" value="<?php echo $row['3'];?>" name="direccion" type="text" required=""  >
</div>

<div class="col-md-2">
<label for="formGroup"> <p>Correo:</p></label>
<input class="form-control" value="<?php echo $row['4'];?>" name="correo" type="email" required=""  >
</div>
<div class="col-md-2">
<br>
<input class="btn" type="submit" name="guardar" value="Aceptar">
<input class="btn"  type="reset" name="Borrar" value="Borrar">

</div>

         </form>

    </div>

 <div class=" col-md-12 container">
<form  method="POST" >
        
<?php
error_reporting(0);
require ('../modelo/conexion.php');   
?>

<table class="table table-striped">
    
    <thead>
       <br>
        <br>
        <br> 
    <tr>
      <th>ID proveedor</th>
      <th>Nombre</th>
      <th>Telefono </th>
       <th>Direccion</th>
       <th>Correo</th>
    </tr>
    </thead>
<?php foreach ($con->query('SELECT * from proveedor') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
  <td><?php echo $row['idproveedor'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['telefono'] ?></td>
    <td><?php echo $row['direccion'] ?></td>
      <td><?php echo $row['correo'] ?></td>
<?php  echo "<td><a href='../vista/AltaProveedores.php?idd=$row[idproveedor]'>Actualizar</a></td>";?>
<?php  echo "<td><a href='../modelo/ProveedorEliminar.php?idd=$row[idproveedor]'>Eliminar</a></td>";?>
 </tr>
<?php
  }
?>
</table>


</form>
         
    </div>                   
                
  <!-- Numero de procedimiento 
         Autor: Erik Geovanni Reynoso Lara
       Fecha: 11/09/2017
       Descripcion: Pantalla de login, recibe los datos del usuario para iniciar secion
       Modificacion:
       Fecha de modificacion: 
       Autor:    
       -->
 

   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>