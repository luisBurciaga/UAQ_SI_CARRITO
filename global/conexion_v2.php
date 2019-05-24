<?php 

require_once('config.php');

function conectar(){
    $conexion = mysqli_connect(server, user, password, BD);
    return $conexion;
}

function desconectar($conexion){
    mysqli_close($conexion);
}

function ejecutaQuery($conexion, $consulta){
    $query = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
    
    return $query;
}



?>