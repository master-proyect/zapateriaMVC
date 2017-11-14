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
<nav  class="navbar navbar-default  ">
<div class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
<a class="navbar-brand" style="padding-top: 40px;" href=""><i class="fa fa-shopping-bag" aria-hidden="true"> SHOSTORS</i></a>

      </div>
       <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-left" style="padding-top: 50px;">
   
           <li><a href="catalogos/catalogoindex.php"><i class="fa fa-male" aria-hidden="true"></i>Caballero</a></li>
         <li><a href="catalogos/mujer.php"><i class="fa fa-female" aria-hidden="true"></i> Damas</a> </li>
         <li><a href="catalogos/ninios.php"><i class="fa fa-child" aria-hidden="true"></i> Niños</a></li>
            </ul>
    <ul class="nav navbar-nav navbar-right">
     <?php  
           if ( !isset($_SESSION['usuario'])) { ?>

            <li><a href='' data-toggle='modal' data-target='#myModal2' ><i class='fa fa-user' aria-hidden='true'> INICIA SESION</i></a></li>
          <li><a href='' data-toggle='modal' data-target='#myModal' ><i class='fa fa-address-card' aria-hidden='true'> REGISTRARSE</i></a> </li>
          <?php
          }else{
            ?>
             <li><a href="vista/carritoR.php"><i class="fa fa-shopping-cart" aria-hidden="true"> MI CARRITO</i></a></li>
           <li><a href="vista/cuenta.php"><i class="fa fa-user" aria-hidden="true"> <?php  
          $imprime = $_SESSION['usuario'];
                 echo "$imprime";
          ?> </i></a> </li>
          <li><a href="modelo/salir.php"><i class="fa fa-lock" aria-hidden="true"> CERRAR SESION</i></a> </li>
           <?php   

          }
     ?>
          

       </u>
   </div>

  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagenes/1.jpg">
      <div class="carousel-caption">

<h3><p>Disfruta el invierno</p></h3>
</div>  
    </div>

    <div class="item">
      <img src="imagenes/2.jpeg">
      <div class="carousel-caption">

<h3><p>Disfruta el invierno</p></h3>
</div>  
    </div>

    <div class="item">
      <img src="imagenes/3.jpeg">
      <div class="carousel-caption">

<h3><p>Disfruta el invierno</p></h3>
</div>  
    </div>
        <div class="item">
      <img src="imagenes/4.jpg">
      <div class="carousel-caption">

<h3><p>Disfruta el invierno</p></h3>
</div>  
    </div>
        <div class="item">
      <img src="imagenes/5.jpg">
      <div class="carousel-caption">

<h3><p>Disfruta el invierno</p></h3>
</div>  
    </div>
        <div class="item">
      <img src="imagenes/6.jpg">
      <div class="carousel-caption">

<h3><p>Disfruta el invierno</p></h3>
</div>  
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</nav>
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
   
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><p>Registrar</p></h4>
      </div>
	  
	  <!-- Numero de procedimiento 03 
	       Autor: Erik Geovanni Reynoso Lara
		   Fecha: 11/09/2017
		   Descripcion: Pantalla de registro, recibe los datos para dar de alta a un nuevo usuario
		   Modificacion:
		   Fecha de modificacion: 
		   Autor:	   
		   -->
	  
      <div class="modal-body">
      <form  method="POST" action="modelo/registro.php">
        
  

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
   

   
      
        
  


     <div class="modal-footer" >
    
     
      <a href="" data-toggle="modal" data-target="#myModal5" data-dismiss="modal"><p>Empleado</p></a>
       <a href="" data-toggle="modal" data-target="#myModal4" data-dismiss="modal"><p>Cliente</p></a>
      </div>
         
    </div>

  



      </div>


  </div>


</div>
 <div id="myModal4" class="modal fade" role="dialog">
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
      <div align="center">   <img src="imagenes/Login.png" height="150px" width="200px" align="center"></div>

   
      <form  method="POST" action="modelo/Validar.php">
        
  
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
 <div id="myModal5" class="modal fade" role="dialog">
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
      <form  method="POST" action="modelo/ValidarEmpleado.php">
        
  
<label class="col-sm-4 control-label"  for="formGroup"><p>Nombre:</p></label>
<input class="form-control" name="nombre" type="text" required=""  >
<br>
<label class="col-sm-4 control-label"  for="formGroup"><p>Cargo:</p></label>
<input class="form-control" name="cargo" required="" type="text">
<br>
<label class="col-sm-4 control-label"  for="formGroup"><p>Codigo:</p></label>
<input class="form-control" name="codigo" required="" type="password">

     <div class="modal-footer" >
    
     <input class="btn" style="color: #f56f3a;" type="submit" name="guardar" value="Login">
       <input class="btn" style="color: #f56f3a;"  type="reset" name="Borrar" value="Borrar">
  
      </div>
         </form>
    </div>

  



      </div>


  </div>


</div>
<div id="myModal3" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Numero de procedimiento 
	       Autor: Erik Geovanni Reynoso Lara
		   Fecha: 11/09/2017
		   Descripcion: Pantalla de recuperacion,recibe los datos de recuperacion
		   Fecha de modificacion: 
		   Autor:	   
		   -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><p>Recuperar cuenta</p></h4>
      </div>
      <div class="modal-body">

   
      <form  method="POST" action="modelo/Recuperar.php">
        
  
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
<div class="container-fluid ">
<!-- Numero de procedimiento 
	       Autor: Erik Geovanni Reynoso Lara
		   Fecha: 11/09/2017
		   Descripcion: muestra  
		   Fecha de modificacion: 
		   Autor:	   
		   -->
<div class="col-xs-12 col-sm-12 col-lg-12">
  <h1 align="center"><span class="label label-warning">TE PUEDE INTERESAR</span></h1>
</div>

  <div class="container-fluid">
    
    <section class="row"> 
        <div class="col-md-4 col-lg-4">
       <br>
       <br>
           <div class="div-img" >    
<img class="img" src="imagenes/flexi.jpg" title="Foto10" alt="flexi">    
<div class="text">Flexi $730 22-29</div>  </div>
        </div>

        <div class="col-md-4 col-lg-4">
             <br>
       <br>
           <div class="div-img" >    
<img class="img" src="imagenes/flexi2.jpg" title="Foto10" alt="flexi">    
<div class="text">Flexi $800 22-29</div>  </div>
        </div>
      

        <div class=" col-md-4 col-lg-4">
  <br>
       <br>
           <div class="div-img" >    
<img class="img" src="imagenes/conv.jpg" title="Foto10" alt="flexi">    
<div class="text">Converse $720 22-29</div>  </div>
        </div>
   

        <div class="col-md-4 col-lg-4">
           <br>
       <br>
           <div class="div-img" >    
<img class="img" src="imagenes/adidas.jpg" title="Foto10" alt="flexi">    
<div class="text">Adidas $690 22-29</div>  </div>
        </div>
         <div class="col-md-4 col-lg-4">
           <br>
       <br>
           <div class="div-img" >    
<img class="img" src="imagenes/nike.jpg" title="Foto10" alt="flexi">    
<div class="text">Nike $820 22-29</div>  </div>
        </div>

         <div class="col-md-4 col-lg-4 ">
           <br>
       <br>
           <div class="div-img" > 
<img class="img" src="imagenes/pirma2.jpg" title="pirma2" alt="">    
<div class="text">Pirma $750 22-29</div> </div>
        </div>



    </section>
    
</div>
</div>
<footer>
     <div class="container-fluid">
      <hr  size=3>
<div class="text1"><h3><span class="label label-info">CONTACTANOS</span></h3></div> 
<br>
</div>
     <div class="piepagina">

     <div class="col-md-8 col-lg-8">
      <div class="col-md-4 col-lg-4">
     <ul><p> Ayuda</p>
         <li><p>Guia de Tallas</p> </li>
         <li><p>Información de envío</p> </li>
         <li><p>Cambios y devoluciones</p> </li>
         <li><p>Centro de ayuda</p> </li>
        

     </ul>   
     

    </div>
     <div class="col-md-4 col-lg-4">
          <ul><p>ShoStorS</p>
         <li><p>Quienes somos</p> </li>
         <li><p>Trabajar en ShoStorS</p> </li>
         <li><p>Empresas Afiliadas</p> </li>
         

     </ul> 


    </div>
     <div class="col-md-4 col-lg-4">
         <ul><p>Politicas</p>
         <li><p>Aviso de privacidad</p> </li>
         <li><p>Términos y condiciones</p> </li>
         <li><p>Políticas de devolución</p> </li>
         <li><p>Políticas de promociones</p> </li>


     </ul> 


    </div>


    
     </div>
   
     <div class="col-md-4 col-lg-4">
     <p>
         Siguenos en nuestras redes sociales
     </p>    
     
   <div align="center">

         <a href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
         <a href="#" class="fa fa-instagram"></a>
      </div>          
     </div>
     </div>
      
  
         
     </div>
     </footer>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>