<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Abrigos</title>
    <link rel="shortcut icon" href="../../assets/images/logo4.png" type="image/x-icon">

    <link rel="stylesheet" href="Barra/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

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
            goTo('vestuario/probador.php');
                }
    </script>
</head>
<body>
	
	<!-- BARRA NAVEGACIÓN-->
	<header>
            <div class="container">
               <nav>
                <ul>
				  <li><a href="../index.html"><img src = "Barra/Iconos/LOGO.png" class="logo"></a></li>
                  <li><a class="estaSI" href="../Camisa/Camisa.php">Camisas<img src = "Barra/Iconos/camisa.png" 
					onmouseover="src='Barra/Iconos/camisa2.png'" 
					onmouseout="src='Barra/Iconos/camisa.png'" 
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Pantalon/Pantalon.php">Pantalones <img src = "Barra/Iconos/pantalon.png" 
                      onmouseover="src='Barra/Iconos/pantalon2.png'" 
                      onmouseout="src='Barra/Iconos/pantalon.png'" 
                      class="iconos"></a></li>
                  <li class="marcada"><a href=#>Abrigos<img src = "Barra/Iconos/abrigoBLANCO.png" 
                      class="iconos"></a></li>
                  <li><a class="estaSI" href="../Jersey/Jersey.php">Jerseys<img src = "Barra/Iconos/jersey.png" 
                      onmouseover="src='Barra/Iconos/jersey2.png'" 
                      onmouseout="src='Barra/Iconos/jersey.png'"
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
			
					  <a class="estaSI finalizar" role="link" onclick="esperar(3500);">Finalizar Selección
						<img src = "Barra/Iconos/probador.png" 
						  onmouseover="src='Barra/Iconos/probador2.png'" 
						  onmouseout="src='Barra/Iconos/probador.png'"
						  class="iconos"></a>
				</ul>
								
              </nav>
            </div>
		</header>
		

	<div class="wrap">
		<div class="store-wrapper">
				<section class="products-list">
				<div class="product-item">
					<img src="FotosProductos/cazadoraAcolchada1.jpg" alt="" >
					<a class= "nombreElemento" href="#">Abrigo Acolchado</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/abrigoAcolchado.php">+ Ver detalles</a>
						<span class="precio">24.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/abrigoCanguro.jpg" alt="" >
					<a class= "nombreElemento" href="#">Cazadora Canguro</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/cazadoraCanguroRED.php">+ Ver detalles</a>
						<span class="precio">22.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/cazadoraMotera.jpg" alt="" >
					<a class= "nombreElemento" href="#">Cazadora Motera</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/cazadoraMotera.php">+ Ver detalles</a>
						<span class="precio">34.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/cazadoraOcre.jpg" alt="" >
					<a class= "nombreElemento" href="#">Cazadora Ocre</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/cazadoraOcreMarr.php">+ Ver detalles</a>
						<span class="precio">25.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/cazadoraVaquera1.jpg" alt="" >
					<a class= "nombreElemento" href="#">Cazadora Vaquera</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/vaquera.php">+ Ver detalles</a>
						<span class="precio">19.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/bomberAzul1.jpg" alt="" >
					<a class= "nombreElemento" href="#">Bomber Azul</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/bomber.php">+ Ver detalles</a>
						<span class="precio">28.99 €</span>
						</nav>
				</div>
			</section>
		</div>
	</div>

</body>
</html>