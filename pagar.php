<?php
	include("global/config.php");
	include("global/conexion_v2.php");
	include("funciones.php");	
	include("templates/cabezera.php");
?>

<?php
	if($_POST){
        // $cantidad=0;

        
        global $product_id;
        global $qty;
        global $price;
        $address = "";
        $direccion = $_POST['direccion'];
        $username = $_POST['username'];
        $userlastname = $_POST['lastname'];
        $telefono = $_POST['telefono'];

        foreach($_SESSION['CARRITO'] as $indice=>$producto){

            $product_id = $producto['id'];
            $name = $producto['product_name'];
            $qty = $producto['cantidad'];
            $price = $producto['price'];
            $date = $producto['date'];
            $status = $producto['status'];

            // $sentencia=$pdo->prepare("INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`, `status`) 
            // VALUES (NULL, $product_id, $qty, $price , NOW(), '0');");
            // $sentencia->execute();

        }

        $con = conectar();
        $address =  $direccion . " " . $username . " " . $userlastname . " " . $telefono; 
        $consulta = "INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `date`, `status`, `direccion`) 
        VALUES (NULL, '$product_id', '$qty', '$price' , NOW(), '0', '$address');";
        $query = ejecutaQuery($con, $consulta);

        echo "<script> alert('COMPRA EXITOSA...'); </script>";
       

        
    }
?>

        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-lg-5 bg-light" style="margin-left:30%;">
                    <div class='card text-center' style="font-size:1.5rem;">
                        <div class='card-header'>
                            Compra
                        </div>
                        <div class='card-body'>
                            <br>
                            <h5 class='card-title'>Gracias por tu compra!!</h5><br>
                            <img src="https://image.flaticon.com/icons/svg/1814/1814919.svg" width="50" height="50">
                            <p class='card-text'>Detalles del envío de la compra: </p><br>
                            <p class="card-text">Dirección: <?php echo $direccion; ?></p><br>
                            <p class="card-text">A nombre de: <?php echo $username; echo $userlastname;?></p><br>
                            <p class="card-text">Teléfono: <?php echo $telefono; ?></p><br>

                            <p class="card-text"></p>
                            <a href='index.php' class='btn btn-primary'>Volver a comprar</a>
                        </div>
                        <div class='card-footer text-muted'>
                            
                        </div>
                    </div>  
                </div>
            </div>

        <!-- </div> -->


<?php 

if($producto['id']==$product_id){
    UNSET($_SESSION['CARRITO'][$indice]);
}


?>
   