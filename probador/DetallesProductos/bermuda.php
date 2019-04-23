<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bermuda Marvel</title>
    <link rel="shortcut icon" href="../../assets/images/logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="Barra/estilosB.css">
    <link rel="stylesheet" href="Barra/fonts/style.css">
    <link rel="stylesheet" href="css/estilos.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
	
		
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
  
</head>

<body>
	<!-- BARRA NAV -->
	<header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
        </div>
        <nav>
            <ul>
                <li> <a href="../index.php"><img src="Barra/Iconos/LOGO.png" class="logo"></a></li>
                <li>
                    <a class="estaSI" href="../Camisa/Camisa.php">
                        Camisas<div id="link"><img src="Barra/Iconos/camisa.png"
                                    onmouseover="src='Barra/Iconos/camisa2.png'"
                                    onmouseout="src='Barra/Iconos/camisa.png'"
                                    class="iconos"></div>
                    </a>
                </li>
                <li>
                    <a class="estaSI" href="../Pantalon/Pantalon.php">
                        Pantalones <img src="Barra/Iconos/pantalon.png"
                                        onmouseover="src='Barra/Iconos/pantalon2.png'"
                                        onmouseout="src='Barra/Iconos/pantalon.png'"
                                        class="iconos">
                    </a>
                </li>
                <li>
                    <a class="estaSI " href="../Abrigo/Abrigo.php">
                        Abrigos<img src="Barra/Iconos/abrigo.png"
                                    onmouseover="src='Barra/Iconos/abrigo2.png'"
                                    onmouseout="src='Barra/Iconos/abrigo.png'"
                                    class="iconos">
                    </a>
                </li>
                <li>
                    <a class="estaSI" href="../Jersey/Jersey.php">
                        Jerseys<img src="Barra/Iconos/jersey.png"
                                    onmouseover="src='Barra/Iconos/jersey2.png'"
                                    onmouseout="src='Barra/Iconos/jersey.png'"
                                    class="iconos">
                    </a>
                </li>
                <li class="Minibarra7">
                    <a class="estaSI Faldas" href="../Falda/Falda.php">
                        Faldas<img src="Barra/Iconos/falda.png"
                                   onmouseover="src='Barra/Iconos/falda2.png'"
                                   onmouseout="src='Barra/Iconos/falda.png'"
                                   class="iconos">
                    </a>
                </li>
                <li class="Minibarra8">
                    <a class="estaSI Calzado" href="../Calzado/Calzado.php">
                        Calzado<img src="Barra/Iconos/calzado.png"
                                    onmouseover="src='Barra/Iconos/calzado2.png'"
                                    onmouseout="src='Barra/Iconos/calzado.png'"
                                    class="iconos">
                    </a>
                </li>
                <li class="Minibarra9">
                    <a class="estaSI Ofertas" href="../Ofertas/Ofertas.php">
                        Ofertas<img src="Barra/Iconos/ofertas.png"
                                    onmouseover="src='Barra/Iconos/ofertas2.png'"
                                    onmouseout="src='Barra/Iconos/ofertas.png'"
                                    class="iconos">
                    </a>
                </li>
                    <a class="estaSI finalizar" role="link" onclick="esperar(3500);" > Finalizar Selección
                        <img src="Barra/Iconos/probador.png"
                             onmouseover="src='Barra/Iconos/probador2.png'"
                             onmouseout="src='Barra/Iconos/probador.png'"
                             class="iconos">
                    </a>
                
            </ul>

        </nav>
    </header>
	<!-- BARRA NAV -->
	<!-- section -->
	<div class="section">
	<?php
			include 'conexion.php';
			$consulta='select * from populares where id=2';
			$sentencia = $pdo->prepare($consulta);
			$sentencia->execute();
			$det=$sentencia->fetch(PDO::FETCH_NUM);
		?>
		<!-- container -->
		<div class="contenedor">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
							<img src="img/<?php echo $det[2];?>">
							</div>
							<div class="product-view">
								<img src="img/bermudaVerde2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="img/bermudaVerde3.jpg" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="img/bermudaVerde1.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="img/bermudaVerde2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="img/bermudaVerde3.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>Nuevo</span>
							</div>
							<h2 class="product-name"><?php echo $det[1];?></h2>
							<h3 class="product-price"><?php echo $det[3];?>€</h3>
							<p style="color:rgb(50, 151, 3);"><strong style="color:black">Disponibilidad: </strong> En stock</p>
							<div class="product-options">
								<ul class="size-option">
									<li><span class="text-uppercase">Talla:</span></li>
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
								</ul>
								<ul class="color-option">
									<li><span class="text-uppercase">Color:</span></li>
									<li class="active"><a href="bermuda.php" style="background-color:rgb(27, 95, 0);"></a></li>
								</ul>
							</div>

							<div class="product-btns">
								<button class="primary-btn add-to-cart" role="link" onclick="window.location.href = 'carritodecompras.php?id=<?php  echo $det[0];?>';">Añadir al vestuario 
									<img src = "../Iconos/probadorBLANCO.png" 
										class="percha"></button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

	<script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="Barra/menu.js"></script>

</body>
</html>
