<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Pago</title>
	<!-- Barra -->
	<link type="text/css" rel="stylesheet" href="Barra/estilosB.css" />
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<script src="store.js" async></script>
</head>

<body>

	<!-- BARRA DENAVEGACIÓN -->
	<header>
			<div class="menu_bar">
				<a href="../../index.php" class="bt-menu"><span class="icon-menu"></span>Vitago</a>
			</div>
			<nav>
				<a href="../probador.php"><img src="Barra/Iconos/LOGO.png" class="logo"></a>
				
			</nav>
		</header>

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">
					<div class="col-md-6">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Datos de envío</h3>
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">¿Ya eres miembro?</label>
									<div class="caption">
											<p>
												<input class="input" type="text" name="password" placeholder="Correo">
												<input class="input" type="password" name="password" placeholder="Contraseña">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Apellidos">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Dirección">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Teléfono">
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Envío</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Normal -  Gratis</label>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Urgente - 4.00€</label>
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Métodos de Pago</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Tarjeta de débito/crédito</label>
								<div class="caption">
									<p>
										<input class="input" type="text" name="password" placeholder="Nombre Titular">
										<input class="input" type="text" name="password" placeholder="Número Tarjeta">
										<input class="input" type="text" name="password" placeholder="Fecha Vencimiento">
										<input class="input" type="text" name="password" placeholder="CCV">
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Paypal</label>
								<div class="caption">
										<p>
											<input class="input" type="text" name="password" placeholder="Correo">
											<input class="input" type="password" name="password" placeholder="Contraseña">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Resumen Pedido</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Producto</th>
										<th></th>
										<th class="text-center">Precio</th>
										<th class="text-center">Cantidad</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody class="cart-items">
									<tr class="cart-row">
										<td class="thumb"><img src="../../Abrigo/FotosProductos/abrigoCanguro.jpg" alt=""></td>
										<td class="details">
											<a href="#">Cazadora Canguro</a>
											<ul>
												<li><span>Size: M</span></li>
												<li><span>Color: Rojo</span></li>
											</ul>
										</td>
										<td class="price text-center"><span class="cart-price">22.99€</span></td>
										<td class="qty text-center"><input class="inputQty" type="number" value="1"></td>
										<td class="text-right"><button class="main-btn icon-btn">X</button></td>
									</tr>
									<tr class="cart-row">
										<td class="thumb"><img src="../../Jersey/FotosProductos/jerseyRayas.jpg" alt=""></td>
										<td class="details">
											<a href="#">Jersey Rayas</a>
											<ul>
												<li><span>Size: M</span></li>
												<li><span>Color: Gris</span></li>
											</ul>
										</td>
										<td class="price text-center"><span class="cart-price">9.99€</span></td>
										<td class="qty text-center"><input class="inputQty" type="number" value="1"></td>
										<td class="text-right"><button class="main-btn icon-btn">X</button></td>
									</tr>
									<tr class="cart-row">
										<td class="thumb"><img src="../../DetallesProductos/img/camisetaBasicaAzul1.jpg" alt=""></td>
										<td class="details">
											<a href="#">Top Azul</a>
											<ul>
												<li><span>Size: L</span></li>
												<li><span>Color: Azul</span></li>
											</ul>
										</td>
										<td class="price text-center"><span class="cart-price">9.99€</span></td>
										<td class="qty text-center"><input class="inputQty" type="number" value="1"></td>
										<td class="text-right"><button class="main-btn icon-btn">X</button></td>
									</tr>
									<tr class="cart-row">
											<td class="thumb"><img src="../../Pantalon/FotosProductos/pantalonCuadrosjpg.jpg" alt=""></td>
											<td class="details">
												<a href="#">Pantalón Cuadros</a>
												<ul>
													<li><span>Size: M</span></li>
													<li><span>Color: Rojo</span></li>
												</ul>
											</td>
											<td class="price text-center"><span class="cart-price">19.99€</span></td>
											<td class="qty text-center"><input class="inputQty" type="number" value="1"></td>
											<td class="text-right"><button class="main-btn icon-btn">X</button></td>
										</tr>
										<tr class="cart-row">
												<td class="thumb"><img src="../../Falda/FotosProductos/faldaVaquera.jpg" alt=""></td>
												<td class="details">
													<a href="#">Falda Vaquera</a>
													<ul>
														<li><span>Size: M</span></li>
														<li><span>Color: Denim</span></li>
													</ul>
												</td>
												<td class="price text-center"><span class="cart-price">8.99€</span></td>
												<td class="qty text-center"><input class="inputQty" type="number" value="1"></td>
												<td class="text-right"><button class="main-btn icon-btn">X</button></td>
											</tr>
											<tr class="cart-row">
													<td class="thumb"><img src="../../Falda/FotosProductos/faldaPunky.jpg" alt=""></td>
													<td class="details">
														<a href="#">Falda Punk</a>
														<ul>
															<li><span>Size: M</span></li>
															<li><span>Color: Rojo-Negro</span></li>
														</ul>
													</td>
													<td class="price text-center"><span class="cart-price">14.99€</span></td>
													<td class="qty text-center"><input class="inputQty" type="number" value="1"></td>
													<td class="text-right"><button class="main-btn icon-btn">X</button></td>
												</tr>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>Tienda:</th>
										<td colspan="2">Vitago</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>Fecha</th>
										<td colspan="2">
											<p><script> document.write(new Date().toLocaleDateString());</script></p>
										</td>
									</tr>
									<tr>
											<th class="empty" colspan="3"></th>
											<th>Hora</th>
											<td colspan="2">	
												<script type="text/javascript">
												var d = new Date();
												document.write(+d.getHours(),':'+d.getMinutes());
												</script>
											</td>
										</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>ENVIO</th>
										<td colspan="2">Normal</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">86.94€</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<center><a href="../..//index.php" class="volver aceptar" >Finalizar Compra</a></center>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
</body>
</html>
