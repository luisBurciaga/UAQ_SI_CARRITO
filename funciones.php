<?php
session_start();

if(isset($_POST['btnaccion'])){

    switch($_POST['btnaccion'])
    {
        case 'agregar':

        $idProducto=$_POST['product_id'];
        $product_name=$_POST['product_name'];
        $cantidad=$_POST['cantidad'];
        $price=$_POST['price'];
        $date=$_POST['date'];
        $status=$_POST['status'];

        if(!isset($_SESSION['CARRITO'])){
            $productoArray = array(
                'id'=> $idProducto,
                'product_name'=>$product_name,
                'cantidad'=>$cantidad,
                'price'=>$price,
                'date'=>$date,
                'status'=>$status
            );
    
            $_SESSION['CARRITO'][0]=$productoArray;
        }
    
        else{
            $numeroProductos=count($_SESSION['CARRITO']);
            $productoArray = array(
                'id'=> $idProducto,
                'product_name'=>$product_name,
                'cantidad'=>$cantidad,
                'price'=>$price,
                'date'=>$date,
                'status'=>$status
            );
    
            $_SESSION['CARRITO'][$numeroProductos]=$productoArray;
        }
        break;

        case 'eliminar':
            $idProducto=$_POST['id'];

            foreach($_SESSION['CARRITO'] as $indie=>$productoArray){
                if($productoArray['id']==$idProducto){
                    UNSET($_SESSION['CARRITO'][$indie]);
                    echo "<script> alert('ELEMENTO BORRADO...'); </script>";
                }
            }
        break;
    }

    
    
} 
?>