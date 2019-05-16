<?php
    $server="mysql:dbname=".BD.";host=".server;

    try{
        $pdo = new PDO($server,user,password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );

        // echo"<script>alert('Conectando...')</script>";
    }catch(PDOException $e){
        // echo"<script>alert('ERROR...')</script>";
    }
?>