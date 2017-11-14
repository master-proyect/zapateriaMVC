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
error_reporting(0); 
require("Incabecera.php");
require ('../modelo/conexion.php');
   
$id = $_REQUEST['idd'];
$user = mysqli_query($con,"SELECT * FROM `producto` WHERE idproducto='$id'");
$row = mysqli_fetch_row($user);

                    
?>

<div class="col-md-12 container">
<form  method="POST" action="../modelo/ModificarProducto.php">
<div class="col-md-1">
<label for="formGroup"> <p>Id:</p></label>
<input class="form-control" value="<?php echo $row['0'];?>" name="id" readonly="readonly" type="text" required=""  >
</div>
<div class="col-md-3">
<label for="formGroup"> <p>Nombre:</p></label>
<input class="form-control" value="<?php echo $row['1'];?>" name="nombre" type="text" required=""  >
</div>

<div class="col-md-3">
<label for="formGroup"> <p>Marca:</p></label>
<input class="form-control" value="<?php echo $row['2'];?>" name="marca" type="text" required=""  >
</div>

<div class="col-md-1">
<label for="formGroup"> <p>Talla:</p></label>
<input class="form-control" value="<?php echo $row['3'];?>" name="talla" type="text" required=""  >
</div>

<div class="col-md-3">
<label for="formGroup"> <p>Direccion de imagen:</p></label>
<input class="form-control" value="<?php echo $row['4'];?>" name="imagen" type="text" required=""  >
</div>
<div class="col-md-1">
<label for="formGroup"> <p>Stock:</p></label>
<input class="form-control" value="<?php echo $row['5'];?>" name="stock" type="text" required=""  >
</div>
<div class="col-md-1">
<label for="formGroup"> <p>Precio:</p></label>
<input class="form-control" value="<?php echo $row['6'];?>" name="precio" type="text" required=""  >
</div>
<div class="col-md-3">
<label for="formGroup"> <p>Observacion:</p></label>
<input class="form-control" value="<?php echo $row['7'];?>" name="observacion" type="text" required=""  >
</div>
<div class="col-md-3">

 <label for="formGroup"> <p>Categoria:</p></label>

<select class="form-control" name="categoria">
  
  <?php

   $user = mysqli_query($con,"SELECT idcategoria,nombre,tipo from categoria order by nombre asc");
   while ($fila = mysqli_fetch_row($user)) {
     echo "<option value='".$fila['0']."'>".$fila['1'],"  ", $fila['2']."</option>";
   }

  ?>

</select>

</div>
<div class="col-md-3">

<label for="formGroup"> <p>Proveedor:</p></label>
<select class="form-control" name="proveedor">
  <?php

  $user1 = mysqli_query($con,"SELECT idproveedor,nombre from proveedor order by nombre asc");
  while ($fila1 = mysqli_fetch_row($user1)) {
  echo "<option value='".$fila1['0']."'>".$fila1['1']."</option>";
   }

  ?>

</select>



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
        

<table class="table table-striped">
    
    <thead>
       <br>
        <br>
        <br> 
    <tr>
      <th>Id Producto</th>
      <th>Nombre</th>
      <th>Marca </th>
       <th>Talla</th>
       <th>Stock</th>
       <th>Precio</th>
      <th>Observacion </th>
       <th>Id categoria</th>
       <th>Id Proveedor</th>
    </tr>
    </thead>
<?php foreach ($con->query('SELECT * from producto') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<tr>
  <td><?php echo $row['idproducto'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['marca'] ?></td>
    <td><?php echo $row['talla'] ?></td>
      <td><?php echo $row['stock'] ?></td>
        <td><?php echo $row['precio'] ?></td>
    <td><?php echo $row['observacion'] ?></td>
    <td><?php echo $row['idcategoria'] ?></td>
      <td><?php echo $row['idproveedor'] ?></td>
<?php  echo "<td><a href='../vista/AltaProducto.php?idd=$row[idproducto]'>Actualizar</a></td>";?>
<?php  echo "<td><a href='../modelo/ProductoEliminar.php?idd=$row[idproducto]'>Eliminar</a></td>";?>
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