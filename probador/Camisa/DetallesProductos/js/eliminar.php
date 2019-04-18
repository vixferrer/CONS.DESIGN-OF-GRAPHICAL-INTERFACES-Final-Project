<?php
session_start();
$dbname = "d1ru6ujq85cesu";
	$arreglo=$_SESSION[$dbname];
	for($i=0;$i<count($arreglo);$i++){
		if($arreglo[$i]['Id']!=$_POST['Id']){
			$datosNuevos[]=array(
				'Id'=>$arreglo[$i]['Id'],
				'Nombre'=>$arreglo[$i]['Nombre'],
				'Precio'=>$arreglo[$i]['Precio'],
				'Imagen'=>$arreglo[$i]['Imagen'],
				'Cantidad'=>$arreglo[$i]['Cantidad']
				);
		}
	}
	if(isset($datosNuevos)){
		$_SESSION[$dbname]=$datosNuevos;
	}else{
		unset($_SESSION[$dbname]);
		echo '0';
	}
?>