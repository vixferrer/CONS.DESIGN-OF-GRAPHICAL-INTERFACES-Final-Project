<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Jerseys</title>
    <link rel="shortcut icon" href="../../assets/images/logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="Barra/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
	
	<!-- BARRA NAVEGACIÓN-->
	<header>
            <div class="container">
               <nav>
                <ul>
				  <li><a href="../index.php"><img src = "Barra/Iconos/LOGO.png" class="logo"></a></li>
                  <li><a class="estaSI" href="../Camisa/Camisa.php">Camisas<img src = "Barra/Iconos/camisa.png" 
					onmouseover="src='Barra/Iconos/camisa2.png'" 
					onmouseout="src='Barra/Iconos/camisa.png'" 
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Pantalon/Pantalon.php">Pantalones <img src = "Barra/Iconos/pantalon.png" 
                      onmouseover="src='Barra/Iconos/pantalon2.png'" 
                      onmouseout="src='Barra/Iconos/pantalon.png'" 
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Abrigo/Abrigo.php">Abrigos<img src = "Barra/Iconos/abrigo.png" 
                      onmouseover="src='Barra/Iconos/abrigo2.png'" 
                      onmouseout="src='Barra/Iconos/abrigo.png'" 
                      class="iconos"></a></li>
                  <li class="marcada"><a href=#>Jerseys<img src = "Barra/Iconos/jerseyBLANCO.png" 
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Falda/Falda.php">Faldas<img src = "Barra/Iconos/falda.png" 
                      onmouseover="src='Barra/Iconos/falda2.png'" 
                      onmouseout="src='Barra/Iconos/falda.png'"
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Calzado/Calzado.php">Calzado<img src = "Barra/Iconos/calzado.png" 
                      onmouseover="src='Barra/Iconos/calzado2.png'" 
                      onmouseout="src='Barra/Iconos/calzado.png'"
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Ofertas/Ofertas.php">Ofertas<img src = "Barra/Iconos/ofertas.png"
                      onmouseover="src='Barra/Iconos/ofertas2.png'" 
                      onmouseout="src='Barra/Iconos/ofertas.png'"
					  class="iconos"></a></li>  
			
					  <a class="estaSI finalizar" href=#>Finalizar Selección
						<img src = "Barra/Iconos/probador.png" 
						  onmouseover="src='Barra/Iconos/probador2.png'" 
						  onmouseout="src='Barra/Iconos/probador.png'"
						  class="iconos"></a>
				</ul>
								
              </nav>
            </div>
		</header>
		
<!-- PRODUCTOS -->
	<div class="wrap">
		<div class="store-wrapper">
				<section class="products-list">
				<div class="product-item">
					<img src="FotosProductos/jerseyAmarillo.jpg" alt="" >
					<a class= "nombreElemento" href="#">Jersey Amarillo</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/jerseyAmarillo.php">+ Ver detalles</a>
						<span class="precio">14.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/jerseyBicolor.jpg" alt="" >
					<a class= "nombreElemento" href="#">Jersey Off Duty</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/jerseyOffDuty.php">+ Ver detalles</a>
						<span class="precio">17.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/jerseyFormas.jpg" alt="" >
					<a class= "nombreElemento" href="#">Jersey Formas</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/jerseyFormas.php">+ Ver detalles</a>
						<span class="precio">11.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/jerseyGordo.jpg" alt="" >
					<a class= "nombreElemento" href="#">Jersey Lana</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/jerseyGordo.php">+ Ver detalles</a>
						<span class="precio">8.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/jerseyGranate.jpg" alt="" >
					<a class= "nombreElemento" href="#">Jersey Granate</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/jerseyGranate.php">+ Ver detalles</a>
						<span class="precio">12.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/jerseyRayas.jpg" alt="" >
					<a class= "nombreElemento" href="#">Jersey Rayas</a><nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/jerseyRayasGris.php">+ Ver detalles</a>
						<span class="precio">9.99 €</span>
						</nav>
				</div>
			</section>
		</div>
	</div>

</body>
</html>