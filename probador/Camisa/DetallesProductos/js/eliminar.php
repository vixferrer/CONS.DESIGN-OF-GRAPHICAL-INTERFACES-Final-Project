<?php
session_start();
$dbname = "d1ru6ujq85cesu";
$nombre="";
$precio=0;
$imagen="";
	$consulta='select * from populares where id='.$_GET['id'];
	$sentencia = $pdo->prepare($consulta);
	$sentencia->execute();
	$det=$sentencia->fetch(PDO::FETCH_NUM);
		$nombre=$det[1];
		$precio=$det[3];
		$imagen=$det[2];
			$_SESSION[$dbname]=$arreglo;
			for($i=0;$i<count($arreglo);$i++){
				if($arreglo[$i]['id']!=$_POST['id']){
					$datosNuevos[]=array(
							'Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen);
				}
			}
			if(isset($datosNuevos)){
				$_SESSION[$dbname]=$datosNuevos;
				echo '0';
			}else{
				unset($_SESSION[$dbname]);
				echo '0';
			}
?>