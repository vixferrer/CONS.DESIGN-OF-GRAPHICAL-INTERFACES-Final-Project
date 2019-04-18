<?php
session_start();
$dbname = "d1ru6ujq85cesu";
	$arreglo=$_SESSION[$dbname];
	for($i=0;$i<count($arreglo);$i++){
		if($arreglo[$i]['Id']!=$_POST['Id']){
			$datosNuevos[]=array(
				'Id'=>$arreglo[$i]['id'],
				'Nombre'=>$arreglo[$i]['nombre'],
				'Imagen'=>$arreglo[$i]['imagen'],
				'Precio'=>$arreglo[$i]['precio']
				);
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