<?php
	session_start();
	$dbname = "d1ru6ujq85cesu";
	include 'conexion.php';
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
						$consulta='select * from populares where id='.$_GET['id'];
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
			$consulta='select * from populares where id='.$_GET['id'];
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
	<link rel="shortcut icon" href="../../../assets/images/logo4.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/estilosCarrito.css">
	<script src="store.js" async></script>

	 <link rel="stylesheet" href="Barra/estilosB.css">
	<link rel="stylesheet" href="Barra/fonts/style.css">

	<script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="Barra/menu.js"></script>

</head>
<body>
	<header>
	<div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
        </div>
        <nav>
            <ul>
                <li> <a href="../index.php"><img src="Barra/Iconos/LOGO.png" class="logo"></a></li>
                
                <li class="Minibarra9">
                    <a role="link" onclick="esperar(3500);" title="Ver vestuario" class="estaSI Ofertas">
                                    Ir a vestuario<img src="Barra/Iconos/probador.png"
                                    onmouseover="src='Barra/Iconos/probador2.png'"
                                    onmouseout="src='Barra/Iconos/probador.png'"
                                    class="iconos">
                    </a>
                </li>             
            </ul>

		</nav>
		
		<script>
        function goTo(url) {
            window.location = url;
                 }
        function esperar(espera) {
            string="pausa_alerta("+espera+");";
            setTimeout(string,espera);
            alert("Trayendo ropa al probador... Espere...");
                 }
        function pausa_alerta(espera) {
            alert("¡¡¡¡¡Vestuario listo!!!!!");
            goTo('../vestuario/probador.php');
                }
    </script>

		
	</header>
	<section class="cart-items">
		<?php
			$total=0;
			if(isset($_SESSION[$dbname])){
			$datos=$_SESSION[$dbname];
			
			$total=0;
			for($i=0;$i<count($datos);$i++)
			{?>
				<div class="producto">
						<img src="./img/<?php echo $datos[$i]['Imagen'];?>">
						<span class="nombreElemento"><?php echo $datos[$i]['Nombre'];?></span>
						<span class="precio"><?php echo $datos[$i]['Precio'];?> €</span>
						<button class="eliminar" type="button">Eliminar</button>
				</div>
			<?php
				$total=($datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.'€</h2></center>';
			
		?>
		<center><a href="../index.php" class="volver aceptar" >Volver a tienda</a></center>

	</section>
</body>
</html>