<?php
$host = "ec2-54-75-230-253.eu-west-1.compute.amazonaws.com";
$user = "acsuirsktfnamd";
$password = "f7b1851d0f809a8419e1cb26c7cbd28acb0f1af8d539295cb2829a20c5de854b";
$dbname = "d1ru6ujq85cesu";
$port = "5432";
try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>
