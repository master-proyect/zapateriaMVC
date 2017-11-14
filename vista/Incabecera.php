<nav  class="navbar navbar-default  " id="barra">
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
 
    <ul class="nav navbar-nav navbar-left" style="padding-top: 30px;">
          <li><a href="../vista/AltaCategorias.php">Categorias</a></li>
          <li><a href="../vista/inventario.php">Inventario</a></li>
          <li><a href="../vista/AltaProducto.php">Productos</a></li>
          <li><a href="../vista/AltaProveedores.php">Proveedores</a> </li>
          <li><a href="../vista/AltaUsuario.php">Usuarios</a></li>
          </ul>
    <ul class="nav navbar-nav navbar-right" >
     <?php  
           if ( !isset($_SESSION['usuario'])) { ?>

            <li><a href='' data-toggle='modal' data-target='#myModal2' ><i class='fa fa-user' aria-hidden='true'> INICIA SESION</i></a></li>
          <li><a href='' data-toggle='modal' data-target='#myModal' ><i class='fa fa-address-card' aria-hidden='true'> REGISTRARSE</i></a> </li>
          <?php
          }else{
            ?>
             
           <li><a href="cuenta.php"><i class="fa fa-user" aria-hidden="true"> <?php  
          $imprime = $_SESSION['usuario'];
                 echo "$imprime";
          ?> </i></a> </li>
          <li><a href="../modelo/salir.php"><i class="fa fa-lock" aria-hidden="true"> CERRAR SESION</i></a> </li>
           <?php   

          }
     ?>
          

       </u>
   </div>
 </nav>