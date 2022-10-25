<?php
$total = 0;
if (isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0) {
?>
	<ul>
		<?php
		foreach ($_SESSION['arrCarrito'] as $producto) {
			$total += $producto['cantidad'] * $producto['precio'];
			$idProducto = openssl_encrypt($producto['idproducto'], METHODENCRIPT, KEY);
		?>

			<li>
				<div class="cart__item d-flex justify-content-between align-items-center">
					<div class="cart__inner d-flex">
						<div class="cart__thumb">
							<div class="header-cart-item-img" idpr="<?= $idProducto ?>" op="1" onclick="fntdelItem(this)">
								<img src="<?= $producto['imagen'] ?>" alt="<?= $producto['producto'] ?>" width="800px">
							</div>
						</div>
						<div class="cart__details">
							<h6><a href="#"> <?= $producto['producto'] ?> </a></h6>
							<div class="cart__price">
								<?= $producto['cantidad'] . ' x ' . SMONEY . formatMoney($producto['precio']) ?>
							</div>
						</div>
					</div>
					<div class="cart__del">
						<a href="#"><i class="fal fa-times"></i></a>
					</div>
				</div>
			</li>

		<?php } ?>
	</ul>
	<div class="w-full">
		<!-- <div class="header-cart-total w-full p-tb-40">
		Total: <?= SMONEY . formatMoney($total); ?>
	</div> -->
		<h6>Total</h6> <span class="cart__sub-total"><?= SMONEY . formatMoney($total); ?></span>

		<div class="header-cart-buttons flex-w w-full">
			<a href="<?= base_url() ?>/carrito" class="wc-cart mb-10">
				Ver carrito
			</a>

			<a href="<?= base_url() ?>/carrito/procesarpago" class="wc-checkout">
				Procesar pago
			</a>



		</div>
	</div>
<?php
}
?>
</ul>