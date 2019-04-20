<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Ofertas</title>
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
            goTo('../vestuario/probador.php');
                }
    </script>
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
                  <li class="marcada"><a href=#>Ofertas<img src = "Barra/Iconos/ofertasBLANCO.png"
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
		
<!-- PRODUCTOS -->

	<div class="wrap">
		<div class="store-wrapper">
				<section class="products-list">
				<div class="product-item">
					<img src="FotosProductos/abrigoCasual.jpg" alt="" >
					<a class= "nombreElemento" href="#">Abrigo Casual</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/abrigo.php">+ Ver detalles</a>
						<span class="precio">14.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/botasOcre.jpg" alt="" >
					<a class= "nombreElemento" href="#">Botas Ocre</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/botas.php">+ Ver detalles</a>
						<span class="precio">12.99 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/camisaAzul.jpg" alt="" >
					<a class= "nombreElemento" href="#">Camisa Azul</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/camisa.php">+ Ver detalles</a>
						<span class="precio">8.25 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/pantalonNegra.jpg" alt="" >
					<a class= "nombreElemento" href="#">Pantalon Negro</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/pantalon.php">+ Ver detalles</a>
						<span class="precio">13.60 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/sudaderaSerie.jpg" alt="" >
					<a class= "nombreElemento" href="#">Sudadera Serie</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/sudadera.php">+ Ver detalles</a>
						<span class="precio">12.75 €</span>
						</nav>
				</div>
				<div class="product-item">
					<img src="FotosProductos/zaptillasAnimal.jpg" alt="" >
					<a class= "nombreElemento" href="#">Zapatillas Mainstream</a>
					<nav class="detallesYPrecio">
						<a class = "boton" href="DetallesProductos/zapatillas.php">+ Ver detalles</a>
						<span class="precio">12.99 €</span>
						</nav>
				</div>
			</section>
		</div>
	</div>

</body>
</html>