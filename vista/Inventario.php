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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-18">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" >
                    <div class="form-group">
                         <div class="col-md-12">
                            <div class="col-md-4">
                               <select class= "form-control" name="buscar">
                                <option value="idproducto">ID producto</option>
                                <option value="nombre">Nombre</option>
                                <option value="marca">Marca</option>
                                <option value="precio">Precio</option>
                                
                                
                                </select>  

                            </div>
   <div class="col-md-4">
              <input type="text" required="" class="form-control" name="tipo" size="30" maxlength="50">

    </div>                         
    <div class="col-md-2">
    <button type="submit" class="btn-lg form-control" > Buscar </button>
    </div>
    </div>
    </div>
<br>
                        
<div class="form-group"  class="form-group" style="background-color: white;">
                           
<div  class="col-md-10" >

<table> 
<tr> 
 
<th width='150' style='font-weight: bold'> Nombre   </th>  
<th width='150' style='font-weight: bold'>Marca      </th>
<th width='150' style='font-weight: bold'>Talla     </th> 
<th width='150' style='font-weight: bold'>Stock      </th>
<th width='150' style='font-weight: bold'>Precio    </th>  
<th width='150' style='font-weight: bold'>Observacion</th>
<th width='150' style='font-weight: bold'>Id Categoria</th>
<th width='150' style='font-weight: bold'>Id Proveedor</th>


<?php

require '../modelo/buscarproducto.php';


?>






</div>
</div>
                          
                
                        
                        
             
                       
                </form>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">
  <!-- Numero de procedimiento 
         Autor: Erik Geovanni Reynoso Lara
       Fecha: 11/09/2017
       Descripcion: Pantalla de login, recibe los datos del usuario para iniciar secion
       Modificacion:
       Fecha de modificacion: 
       Autor:    
       -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><p>Iniciar seccion</p></h4>
      </div>
      <div class="modal-body">
          <?php
              error_reporting(0);
               require ('../modelo/conexion.php');      
               $id = $_REQUEST['id'];
              
                   
                        $user = mysqli_query($con,"SELECT * FROM `producto` WHERE idproducto='$id'");
                        $row = mysqli_fetch_row($user);

                    ?>
<form  method="POST" action="modelo/registro.php">
        
  

<label class="col-sm-6 "  for="formGroup"> <p>Nombre:</p></label>
<input class="form-control" value="<?php echo $row['0'];?>" name="nombre" type="text" required=""  >
<br>
<label class="col-sm-6"  for="formGroup"><p>Marca:</p></label>
<input class="form-control" name="apellido" type="text" required=""  >
<br>
<label class="col-sm-6"  for="formGroup"><p>Talla:</p></label>
<input class="form-control" name="usuario" type="text" required=""  >
<br>
<label class="col-sm-6"  for="formGroup"><p>Stock:</p></label>
<input class="form-control" name="contraseña" required="" type="password"   >
<br>
<label class="col-sm-6"  for="formGroup"><p>Precio:</p></label>
<input class="form-control" name="confirma" required="" type="password" >
<br>
<label class="col-sm-6"  for="formGroup"><p>Observacion:</p></label>
<input class="form-control " name="respuesta" type="text" >
<br>
<div class="modal-footer">
<input class="btn" type="submit" name="guardar" value="Registrar">
<input class="btn"  type="reset" name="Borrar" value="Borrar">
</div>
         </form>
         
    </div>
      </div>


  </div>


</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>