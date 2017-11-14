<?php  
session_start();


if(!isset($_SESSION["carrito"])){
			$_SESSION["carrito"]=array( array("modelo"=>$_POST["modelo"],"descripcion"=> $_POST["descrip"],"precio"=> $_POST["precio"],"talla"=> $_POST["talla"]));
		}else{
			$cart = $_SESSION["carrito"];
            array_push($cart, array("modelo"=>$_POST["modelo"],"descripcion"=> $_POST["descrip"],"precio"=> $_POST["precio"],"talla"=> $_POST["talla"]));
			$_SESSION["carrito"] = $cart;
		}
	echo "<script>alert('El PRODUCTO SE AGREGO AL CARRITO');location.href ='javascript:history.back()';</script>";
echo "<script>location.href ='javascript:history.back()';</script>";



?>