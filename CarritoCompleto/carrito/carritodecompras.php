<?php
	session_start();
	$dbname = "d1ru6ujq85cesu";
	include '../../conexion.php';
	if(isset($_SESSION[$dbname])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION[$dbname];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION[$dbname]=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$consulta='select * from camisas where id=2';
						$sentencia = $pdo->prepare($consulta);
						$sentencia->execute();
						$det=$sentencia->fetch(PDO::FETCH_NUM);
							$nombre=$det[1];
							$precio=$det[3];
							$imagen=$det[2];
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION[$dbname]=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$consulta='select * from camisas where id=2';
						$sentencia = $pdo->prepare($consulta);
						$sentencia->execute();
						$det=$sentencia->fetch(PDO::FETCH_NUM);
							$nombre=$det[1];
							$precio=$det[3];
							$imagen=$det[2];
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION[$dbname]=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Vestuario</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/logo.png" id="logo">
		<a href="./carritodecompras.php" title="Ver vestuario">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		<?php
			$total=0;
			if(isset($_SESSION[$dbname])){
			$datos=$_SESSION[$dbname];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				<div class="producto">
					<center>
						<img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
						<span ><?php echo $datos[$i]['Nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad: 
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						<a href="carritodecompras.php" class="eliminar" data-id="<?php echo $datos[$i]['Cantidad'-1]?>">Eliminar</a>
					</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
			if($total!=0){
					echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>;';
			}
			
		?>
		<center><a href="../../probador/index.php">Volver a tienda</a></center>
		
		
		

		
	</section>
</body>
</html>