<?php
    $server="ec2-54-75-230-253.eu-west-1.compute.amazonaws.com";
    $username="acsuirsktfnamd";
    $password="f7b1851d0f809a8419e1cb26c7cbd28acb0f1af8d539295cb2829a20c5de854b";
    $db="d1ru6ujq85cesu";
    //  or die("no se pudo establecer la conexión");
    $dbconn = pg_connect($server, 5432, $db, $username, $password )or die("no se pudo establecer la conexión");
    $sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");
    
?>