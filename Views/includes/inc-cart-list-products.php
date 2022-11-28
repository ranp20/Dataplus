<div class="container  mt-3 mb-3">
	<div class="row">
		<?php
		
		$subtotalCart = 0;
		if(isset($_SESSION['arrCarrito']) && count($_SESSION['arrCarrito']) > 0){
			
		?>
    <div class="col-lg-9 col-12">
      <div class="cart-item-section">
    		<h1 class="title-section">Carrito de compras</h1>
				<?php
					$tmp_cartpage = "";
					foreach($_SESSION['arrCarrito'] as $p){
						$totalCart += $p['cantidad'] * $p['precio'];
						$idProducto = openssl_encrypt($p['idproducto'], METHODENCRIPT, KEY);
						$pcart_img = $p['imagen'];
						$pcart_name = $p['producto'];
						$pcart_quantity = $p['cantidad'];
						$pcart_price =  SMONEY . formatMoney($p['precio']);

						$tmp_cartpage .= "
							<div class='cart-items row'>
							  <div class='cart-item row'>
							    <div class='col-md-11'>
								    <div class='row'>
								      <div class='col-2'>
								        <div class='image-container'>
								          <a href='' title='{$pcart_name}'>
								            <img loading='lazy' src='{$pcart_img}' width='100' height='100' alt='{$pcart_name}'>
								          </a>
								        </div>
								      </div>
								      <div class='item-title col-10'>
								        <span>
								        	<a href=''>{$pcart_name}</a>
								        </span>
										  <div>
										    <span class='badge-condition-type'>Nuevo</span>
										  </div>
								        <ul class='item-variation ng-hide'>
								          <li class='ng-hide'>Talla: …</li>
								          <li >Opción: …</li>
								        </ul>
								      </div>
								    </div>
								    <div class='row'>
								      <div class='col-12 offset-md-2'>
								        <div class='price-section'>          
								          <div class='discount-container'>
								            <span class='original-price'> {$pcart_price}</span>
								            <span class='discount'>- 38%</span>
								          </div>
								          <div>
								            <div class='lowest-price'>
								              <span class='price-promotional'>{$pcart_price}</span>
								              <span class='sprite sprite-cmr_pe-sm'></span>
								            </div>
								          </div>
								        </div>
			        					<!-- 
			        					<div>
								          <div class='shipping-estimate-section'>
								    				<div>
								    					<span class='cart-shipping-icon icon'></span>
								  					</div>
								  					<div class='cart-store-pickup-post-icon-aligner'>
								    					<div>
								        				<div class='delivery-date'>
								    							<p>Entrega estimada: 10 de noviembre</p>
								  							</div>
								    					</div>
								  					</div>
													</div>
								        </div>
													-->
			      					</div>
			     					</div>
			    				</div>
							    <div class='amount-section col-md-1 col-12'>
							      <select class='form-control form-control-sm ng-pristine ng-valid ng-not-empty ng-touched' ng-model='item.quantity' ng-options='quantity for quantity in [] | range:1:item.maxItemsToSell track by quantity' ng-change='cart.updateQuantity(item.sku, item.quantity)'>
							      	<option label='1' value='1' selected='selected'>1</option>
							      	<option label='2' value='2'>2</option>
							      	<option label='3' value='3'>3</option>
							      	<option label='4' value='4'>4</option>
							      	<option label='5' value='5'>5</option>
							      	<option label='6' value='6'>6</option>
							      	<option label='7' value='7'>7</option>
							      	<option label='8' value='8'>8</option>
							      	<option label='9' value='9'>9</option>
							      	<option label='10' value='10'>10</option>
							      </select>
							    </div>
							    <div class='cart-actions col-12'>
						        <a href='javascript:void(0);' title='Eliminar producto'>Eliminar</a>
							    </div>
			  				</div>
							</div>
						";
					}

					echo $tmp_cartpage;
					$subtotalCart = SMONEY . formatMoney($totalCart);
				?>
    	</div>
      <div class="cart-item-section">
      	<div ng-show="cart.savedForLaterReady" class=""></div>
      </div>
  	</div>
  	<div class="cart-summary-section col-xl-3 col-lg-3 col-md-12 col-12">
    	<div class="summary-container">
      	<h3 class="title-summary">Resumen de tu Pedido</h3>
        <ul class="summary">
          <li class="d-flex">
            <p>Subtotal (2)</p>
            <span class="price-main-sm float-right subtotal-price ml-auto"><?= $subtotalCart;?></span>
          </li>            
					<li ng-show="cart.data.originalShippingAmount >= 0" class="d-flex">
            <p>Envío</p>
            <span class="price-base-md float-right shipping-price ml-auto ng-hide" ng-show="cart.data.originalShippingAmount > 0">S/ 0.00</span>
            <!-- <span class="price-base-md float-right shipping-price ml-auto" ng-show="cart.data.originalShippingAmount == 0">Envío gratis</span> -->
          </li>
					<!-- <li ng-show="cart.data.cartRuleDiscount > 0" class="d-flex ng-hide">
            <p>Descuento</p>
            <span class="price-light-md float-right ml-auto">-S/ 0.00</span>
          </li> -->
          <ul class="summary-total-pay-section">
            <li class="summary-total">
              <h3 class="d-flex justify-content-between">Total
              	<span class="price-main-md" ng-bind="cart.data.grandTotal|formatMoney"><?= $subtotalCart;?></span>
							</h3>
            </li>
            <li class="summary-pay row">
              <a href="/checkout/payment" class="btn btn-lg btn-primary summary-btn-process-pay col-md-12" ng-show="!cart.data.hasInternationalRestriction()">Procesar Compra</a>
						</li>
          </ul>
        </ul>
        <div class="vertical-usp row">
          <div class="usp-cart-container col-12 cart-usp">
            <div class="badge-customer-protection"><span class="icon sprite-customer-protection"></span></div>            
            <a href="/sp/proteccion-al-cliente" target="_blank" rel="noopener noreferrer" class="usp usp-internal">
          		<span class="icon icon-sm usp-icon"></span>
	            <div class="usp-title body-base-md">Protección al comprador</div>
    				</a>
            <a href="/sp/preguntas-frecuentes/contactar#s1-p1" target="_blank" rel="noopener noreferrer" class="usp usp-internal">
	            <span class="icon icon-sm usp-icon"></span>
	            <div class="usp-title body-base-md">Asesoría telefónica: (01) 6400-240</div>
		        </a>
            <a href="/sp/proteccion-al-cliente#pedido" target="_blank" rel="noopener noreferrer" class="usp usp-internal">
	            <span class="icon icon-sm usp-icon"></span>
	            <div class="usp-title body-base-md">Rastrea tu pedido</div>
    				</a>
          </div>
        </div>
			</div>
  	</div>
		<?php }else{?>
		<br>
		<div class="container">
			<p>No hay producto en el carrito <a href="<?= base_url();?>"> Ver productos</a></p>
		</div>
		<br>
		<?php } ?>
	</div>
</div>