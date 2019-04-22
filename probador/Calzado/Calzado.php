<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calzado</title>
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
                <li class="Minibarra7">
                    <a href="../Falda/Falda.php">
						Faldas<img src="Barra/Iconos/falda.png"
									onmouseover="src='Barra/Iconos/falda2.png'"
                                    onmouseout="src='Barra/Iconos/falda.png'"
                                   	class="iconos">
                    </a>
                </li>
                <li class="Minibarra8 marcada">
                    <a class="Calzado" href="Calzado.php">
                        Calzado<img src="Barra/Iconos/calzadoBLANCO.png"
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
					<img src="FotosProductos/bamba.jpg" alt="" >
					<a class= "nombreElemento" href="#">Bamba Tie</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/bamba.php">+ Ver detalles</a>
						<span class="precio">16.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/cuñas.jpg" alt="" >
					<a class= "nombreElemento" href="#">Cuñas Altas</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/cuñas.php">+ Ver detalles</a>
						<span class="precio">15.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/deportivo.jpg" alt="" >
					<a class= "nombreElemento" href="#">Deportivas Hard Style</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/deportivas.php">+ Ver detalles</a>
						<span class="precio">25.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/nautico.jpg" alt="" >
					<a class= "nombreElemento" href="#">Nauticos Selección Smart</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/nauticos.php">+ Ver detalles</a>
						<span class="precio">19.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/sandaliaSimpsons.jpg" alt="" >
					<a class= "nombreElemento" href="#">Sandalias los Simpsons</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/sandalias.php">+ Ver detalles</a>
						<span class="precio">9.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/sandaliaTacon.jpg" alt="" >
					<a class= "nombreElemento" href="#">Sandalias con Tacón</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/tacon.php">+ Ver detalles</a>
						<span class="precio">17.99 €</span>
						</nav>
				</div>
			</section>
		</div>
	</div>

</body>
</html>