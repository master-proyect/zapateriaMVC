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
error_reporting(0); 
require ('../modelo/conexion.php');
    
$id = $_REQUEST['idd'];
$user = mysqli_query($con,"SELECT * FROM `usuario` WHERE idusuario='$id'");
$row = mysqli_fetch_row($user);

                    
?>

<div class="col-md-12 container">
<form  method="POST" action="../modelo/modificarusuario.php">
 <div class="col-md-3">
<label for="formGroup"> <p>Id Usuario</p></label>
<input class="form-control" value="<?php echo $row['0'];?>" readonly="readonly" name="id" type="text" required=""  >
</div>
<div class="col-md-3">
<label for="formGroup"> <p>Nombre:</p></label>
<input class="form-control" value="<?php echo $row['1'];?>" name="nombre" type="text" required=""  >
</div>

<div class="col-md-3">
<label for="formGroup"> <p>Numero de Empleado:</p></label>
<input class="form-control" value="<?php echo $row['4'];?>" name="numero" type="text" required=""  >
</div>

<div class="col-md-3">
<label for="formGroup"> <p>Cargo:</p></label>
<input class="form-control" value="<?php echo $row['2'];?>" name="cargo" type="text" required=""  >
</div>

<div class="col-md-3">
<label for="formGroup"> <p>Codigo:</p></label>
<input class="form-control" value="<?php echo $row['3'];?>" name="codigo" type="password" required="">
</div>
<div class="col-md-3">
<label for="formGroup"> <p>Confirmar Codigo:</p></label>
<input class="form-control" value="<?php echo $row['3'];?>" name="segundocodigo" type="password" required="">
</div>
<div class="col-md-3">
<label for="formGroup"> <p>Observacion:</p></label>
<input class="form-control" value="<?php echo $row['5'];?>" name="observacion" type="text" required=""  >

</div>
<div class="col-md-3">
	<br>
<div align="center">
<input class="btn" type="submit" name="guardar" value="Aceptar">
<input class="btn"  type="reset" name="Borrar" value="Borrar">
</div>
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
      <th>ID Usuario</th>
      <th>Nombre</th>
      <th>Numero de Empleado</th>
       <th>Cargo</th>
        <th>Observacion</th>
    </tr>
    </thead>
<?php foreach ($con->query('SELECT * from usuario') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
  <td><?php echo $row['idusuario'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['numeroempleado'] ?></td>
    <td><?php echo $row['cargo'] ?></td>
      <td><?php echo $row['observacion'] ?></td>
<?php  echo "<td><a href='../vista/AltaUsuario.php?idd=$row[idusuario]'>Actualizar</a></td>";?>
<?php  echo "<td><a href='../modelo/UsuarioEliminar.php?idd=$row[idusuario]'>Eliminar</a></td>";?>
 </tr>
<?php
  }
?>
</table>


</form>
         
    </div>                   
            
   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>