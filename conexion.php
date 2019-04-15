<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="carrito";
    $con=mysql_connect($server, $username,$password) or die("no se pudo establecer la conexión");
    $sdb=mysql_select_db($con,$db)or die("la base de datos no existe");
?>