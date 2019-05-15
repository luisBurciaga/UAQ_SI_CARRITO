<?php
session_start();

if(isset($_POST['btnaccion'])){

    $idProducto=$_POST['product_id'];
    $cantidad=$_POST['cantidad'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $status=$_POST['status'];

    if(!isset($_SESSION['CARRITO'])){
        $productoArray = array(
            'id'=> $idProducto,
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
            'cantidad'=>$cantidad,
            'price'=>$price,
            'date'=>$date,
            'status'=>$status
        );

        $_SESSION['CARRITO'][$numeroProductos]=$productoArray;
    }

    print_r($_SESSION['CARRITO'],true);
    
}
?>