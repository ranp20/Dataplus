<?php
headerTienda($data);
?>
<br><br><br>
<hr>
<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="<?= base_url() ?>" class="stext-109 cl8 hov-cl1 trans-04">
			Inicio
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<span class="stext-109 cl4">
			<?= $data['page_title'] ?>
		</span>
	</div>
</div>
<?php
$subtotal = 0;
$total = 0;
if (isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0) {
?>
	<!-- Shoping Cart -->
	
		<div class="container  mt-3 mb-3">
			<div class="row">
				<div class="col-12">
				<form >
				<div class="table-content table-responsive">
						<table id="tblCarrito" class="table table-shopping-cart">
							<thead>
								<tr class="table_head">
								<th class="column-1">Imagen</th>
								<th class="column-2">Producto</th>
								<th class="column-3">Precio</th>
								<th class="column-4">Cantidad</th>
								<th class="column-5">Total</th>
							</tr>
							</thead>
							
							<?php
							foreach ($_SESSION['arrCarrito'] as $producto) {
								$totalProducto = $producto['precio'] * $producto['cantidad'];
								$subtotal += $totalProducto;
								$idProducto = openssl_encrypt($producto['idproducto'], METHODENCRIPT, KEY);

							?>
							<tbody>
									<tr class="table_row <?= $idProducto ?>">
									<td class="column-1">
										<div class="how-itemcart1" idpr="<?= $idProducto ?>" op="2" onclick="fntdelItem(this)">
											<img src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>">
										</div>
									</td>
									<td class="column-2"><?= $producto['producto'] ?></td>
									<td class="column-3"><?= SMONEY . formatMoney($producto['precio']) ?></td>
									<td class="column-4">
										<div class="d-flex">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m text-center" idpr="<?= $idProducto ?>">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 text-center num-product" type="number" name="num-product1" value="<?= $producto['cantidad'] ?>" idpr="<?= $idProducto ?>">



											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m text-center" idpr="<?= $idProducto ?>">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5"><?= SMONEY . formatMoney($totalProducto) ?></td>
								</tr>
							</tbody>
							
							<?php } ?>

						</table>
					</div>
					
						<div class="row justify-content-end">
							<div class="col-md-5">
								<div class="cart-page-total">
									<h2>Totales</h2>
									<ul class="mb-20">
										<li>Subtotal <span id="subTotalCompra" class="mtext-110 cl2"><?= SMONEY . formatMoney($subtotal) ?></span></li>
										<li>Envío <span> <?= SMONEY . formatMoney(COSTOENVIO) ?></span></li>
										<li>Total <span id="totalCompra"><?= SMONEY . formatMoney($subtotal + COSTOENVIO) ?></span></li>
									</ul>
									<a class="tp-btn-h1" href="<?= base_url() ?>/carrito/procesarpago" id="btnComprar">Procesar pago</a>
								</div>
							</div>
					

						</div>
				</form>

						


				</div>


			</div>
		</div>
	


<?php } else { ?>
	<br>
	<div class="container">
		<p>No hay producto en el carrito <a href="<?= base_url() ?>/tienda"> Ver productos</a></p>
	</div>
	<br>
<?php
}
footerTienda($data);
?>