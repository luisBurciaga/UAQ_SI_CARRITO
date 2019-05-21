<?php
	include("global/config.php");
	include("global/conexion.php");
	include("funciones.php");	
	include("templates/cabezera.php");
?>

<?php
	if($_POST){
        // $cantidad=0;

        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $username = $producto['username'];
            $userlastname = $producto['userlastname'];
            $telefono = $producto['telefono'];
            $direccion = $producto['direccion'];

            $product_id = $producto['id'];
            $name = $producto['product_name'];
            $qty = $producto['cantidad'];
            $price = $producto['price'];
            $date = $producto['date'];
            $status = $producto['status'];

            $sentencia=$pdo->prepare("INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`, `status`) 
            VALUES (NULL, $product_id, $qty, $price , NOW(), '0');");
            $sentencia->execute();

            // $cantidad_por_nombre =$pdo->prepare("SELECT `quantity` FROM `products` WHERE `name` = :nombre ;");
            // $cantidad_por_nombre->bindValue(":nombre",$name);
            // $cantidad_por_nombre->execute();
            
            // $cantidad = number_format($cantidad_por_nombre - $qty);
            // $actualizar_cantidad =$pdo->prepare("UPDATE `products` SET `quantity`= $cantidad WHERE `name` = $name ;");
            // $actualizar_cantidad->execute();


            if($producto['id']==$product_id){
                UNSET($_SESSION['CARRITO'][$indice]);
            }
        }

        echo "<script> alert('COMPRA EXITOSA...'); </script>";
        echo "PAGADO";

        
    }
?>