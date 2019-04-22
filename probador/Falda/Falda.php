<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Faldas</title>
    <link rel="shortcut icon" href="../../assets/images/logo4.png" type="image/x-icon">

	<link rel="stylesheet" href="Barra/estilosB.css">
	<link rel="stylesheet" href="Barra/fonts/style.css">
	<link rel="stylesheet" href="Barra/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>

	<script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="Barra/menu.js"></script>
	
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
	
	<!-- BARRA NAVEGACIÓN-->
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
                    <a class="estaSI" href="../Abrigo/Abrigo.php">
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
                <li class="Minibarra7 marcada">
                    <a href="Falda.php">
                        Faldas<img src="Barra/Iconos/faldaBLANCO.png"
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
		
<!-- PRODUCTOS -->
	<div class="wrap">
		<div class="store-wrapper">
				<section class="products-list">
				<div class="product-item">
					<img src="FotosProductos/faldaMilitar.jpg" alt="" >
					<a class= "nombreElemento" href="#">Falda Militar</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/faldaMilitar.php">+ Ver detalles</a>
						<span class="precio">15.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/faldaNaranja.jpg" alt="" >
					<a class= "nombreElemento" href="#">Falda Naranja</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/faldaNaranja.php">+ Ver detalles</a>
						<span class="precio">10.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/faldaNegra.jpg" alt="" >
					<a class= "nombreElemento" href="#">Falda Negra</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/faldaNegra.php">+ Ver detalles</a>
						<span class="precio">9.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/faldaPunky.jpg" alt="" >
					<a class= "nombreElemento" href="#"> Falda Punk</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/faldaPunk.php">+ Ver detalles</a>
						<span class="precio">14.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/faldaRara.jpg" alt="" >
					<a class= "nombreElemento" href="#">Falda Corta</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/faldaCorta.php">+ Ver detalles</a>
						<span class="precio">12.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/faldaVaquera.jpg" alt="" >
					<a class= "nombreElemento" href="#">Falda Vaquera</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/faldaVaquera.php">+ Ver detalles</a>
						<span class="precio">8.99 €</span>
						</nav>
				</div>
			</section>
		</div>
	</div>

</body>
</html>