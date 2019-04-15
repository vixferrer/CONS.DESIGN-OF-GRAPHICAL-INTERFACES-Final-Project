<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="carrito";
    $con=mysqli_connect($server, $username,$password) or die("no se pudo establecer la conexión");
    $sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");
?>