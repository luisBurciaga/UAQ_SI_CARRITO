<?php
	include("global/config.php");
	include("global/conexion.php");
	include("funciones.php");	
	include("templates/cabezera.php");
?>

<?php
	if($_POST){

        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $product_id = $producto['id'];
            $qty = $producto['cantidad'];
            $price = $producto['price'];
            $date = $producto['date'];
            $status = $producto['status'];

            $sentencia=$pdo->prepare("INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`, `status`) 
            VALUES (NULL, $product_id, $qty, $price , NOW(), '0');");

            // $sentencia->binParam(":product_id",$product_id);
            // $sentencia->binParam(":qty",$qty);
            // $sentencia->binParam(":price",$price);

            $sentencia->execute();
        }

        echo "<script> alert('COMPRA EXITOSA...'); </script>";
        echo "PAGADO";

        
    }
?>