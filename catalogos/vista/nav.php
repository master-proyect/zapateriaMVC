
<link rel="stylesheet" type="text/css" href="estilolete.css">
<nav  class="navbar navbar-default  " id="barra">
<header>
 <div class="wrapper">
<div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
<a class="navbar-brand" style="padding-top: 40px;" href="../index.php"><i class="fa fa-shopping-bag" aria-hidden="true"> SHOSTORS</i></a>

      </div>

       <div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav navbar-right" style="padding-top: -20px;" >
         <?php  

           if ( !isset($_SESSION['usuario'])) { ?>

            <li><a href='' data-toggle='modal' data-target='#myModal2' ><i class='fa fa-user' aria-hidden='true'> INICIA SESION</i></a></li>
          <li><a href='' data-toggle='modal' data-target='#myModal' ><i class='fa fa-address-card' aria-hidden='true'> REGISTRARSE</i></a> </li>
          <?php
          }else{
            ?>
             <li><a href="../vista/carritoR.php"><i class="fa fa-shopping-cart" aria-hidden="true"> MI CARRITO</i></a></li>
           <li><a href="../vista/cuenta.php"><i class="fa fa-user" aria-hidden="true"> <?php  
          $imprime = $_SESSION['usuario'];
                 echo "$imprime";
          ?> </i></a> </li>
          <li><a href="../modelo/salir.php"><i class="fa fa-lock" aria-hidden="true"> CERRAR SESION</i></a> </li>
           <?php   

          }
     ?>

       </u>
       </ul>
       <ul class="nav navbar-nav" style="padding-top: 20px;">

         <li><a href="../catalogoindex.php"><i class="fa fa-male" aria-hidden="true"></i>  Caballero</a></li>
         <li><a href="../mujer.php"><i class="fa fa-female" aria-hidden="true"></i> Damas</a> </li>
         <li><a href="../ninios.php"><i class="fa fa-child" aria-hidden="true"></i> Niños</a></li>
       </u>
       </ul>

   </div>
   </div>
   </header>
 </nav>

   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><p>Registrar</p></h4>
      </div>
      <div class="modal-body">
      <form  method="POST" action="PHPusuario/registro.php">



<label class="col-sm-6 control-label"  for="formGroup"> <p>Nombres:</p></label>
<input class="form-control" name="nombre" type="text" required=""  >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Apellidos:</p></label>
<input class="form-control" name="apellido" type="text" required=""  >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Nombre de Usuario:</p></label>
<input class="form-control" name="usuario" type="text" required=""  >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Contraseña:</p></label>
<input class="form-control" name="contraseña" required="" type="password"   >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Confirmar Contraseña:</p></label>
<input class="form-control" name="confirma" required="" type="password" >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Pregunta de seguridad:</p></label>
 <select class= "form-control" name="pregunta">
  <option value="mascota"><p>¿Nombre de primer mascota?</p></option>
  <option value="lugar"><p>¿Lugar donde se conocieron tus padres?</p></option>
  <option value="amigo"><p>¿Nombre de tu mejor amigo?</p></option>

</select>
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Respuesta:</p></label>
<input class="form-control " name="respuesta" type="text" >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Correo:</p></label>
<input class="form-control" name="email" required="" type="email"  >

     <div class="modal-footer">
     <input class="btn" style="color: #f56f3a;" type="submit" name="guardar" value="Registrar">
     <input class="btn" style="color: #f56f3a;"  type="reset" name="Borrar" value="Borrar">

      </div>
         </form>
    </div>





      </div>


  </div>


</div>


 <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><p>Iniciar seccion</p></h4>
      </div>
      <div class="modal-body">
      <div align="center">   <img src="../imagenes/Login.png" height="150px" width="200px" align="center"></div>


      <form  method="POST" action="PHPusuario/Validar.php">


<label class="col-sm-4 control-label"  for="formGroup"><p>Usuario:</p></label>
<input class="form-control" name="usua" type="text" required=""  >
<br>
<label class="col-sm-4 control-label"  for="formGroup"><p>Contraseña:</p></label>
<input class="form-control" name="cont" required="" type="password">


     <div class="modal-footer" >

     <input class="btn" style="color: #f56f3a;" type="submit" name="guardar" value="Login">
       <input class="btn" style="color: #f56f3a;"  type="reset" name="Borrar" value="Borrar">
      <a href="" data-toggle="modal" data-target="#myModal3" data-dismiss="modal"><p>Recuperar contraseña</p></a>
      </div>
         </form>
    </div>





      </div>


  </div>


</div>


 <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><p>Recuperar cuenta</p></h4>
      </div>
      <div class="modal-body">


      <form  method="POST" action="PHPusuario/Recuperar.php">


<label class="col-sm-4 control-label"  for="formGroup"><p>Usuario:</p></label>
<input class="form-control" name="usua" type="text" required=""  >

<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Pregunta de seguridad:</p></label>
 <select class= "form-control" name="pregunta">
  <option value="mascota"><p>¿Nombre de primer mascota?</p></option>
  <option value="lugar"><p>¿Lugar donde se conocieron tus padres?</p></option>
  <option value="amigo"><p>¿Nombre de tu mejor amigo?</p></option>
 </select>
 <br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Respuesta:</p></label>
<input class="form-control " name="respuesta" type="text" >
<br>
  <label class="col-sm-6 control-label"  for="formGroup"><p>Nueva contraseña:</p></label>
<input class="form-control" name="contraseña" required="" type="password"   >
<br>
<label class="col-sm-6 control-label"  for="formGroup"><p>Confirmar Contraseña:</p></label>
<input class="form-control" name="confirma" required="" type="password" >
<br>
   <div class="modal-footer" >
     <input class="btn" style="color: #f56f3a;" type="submit" name="guardar" value="Recuperar">
       <input class="btn"  style="color: #f56f3a;"  type="reset" name="Borrar" value="Borrar">

      </div>
         </form>
    </div>





      </div>


  </div>


</div>
