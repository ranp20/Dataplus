<?php
headerTienda($data);
?>
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
			<!-- 
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
			 -->



			<style type="text/css">
				.cart-item-section .title-section {
			    border-bottom: 1px solid #ccc;
			    margin-left: 0;
			    margin-right: 0;
			    padding-bottom: 16px;
			    text-transform: uppercase;
			    font-weight: 600;
				}
				.cart-item-section h1{
					font-size: 1.3rem;
    			line-height: 1.7rem;
				}
				.cart-item{
				  border-bottom: 1px solid #ccc;
			    padding: 20px 0 8px;
			    width: 100%;
				}
				.cart-item .image-container {
				  text-align: center;
				}
				.cart-item .image-container img {
				  height: 91px;
				  width: 91px;
				}
				.cart-item .item-title a {
				  color: #333;
				  font-size: 1rem;
				  font-weight: 700;
				  text-transform: capitalize;
				}
				.badge-condition-type {
				  color: #333;
				  font-family: Arial,Roboto,"-apple-system",Helvetica,sans-serif;
				  font-size: .8rem;
				  font-weight: 400;
				  line-height: 1;
				  text-transform: uppercase;
				}
				.cart-item .item-title .badge-condition-type {
				  font-size: .8rem;
				}
				.cart-item .delivery-section {
				  padding-right: 12px;
				}
				.cart-item .amount-section {
				  float: right;
				  margin: 12px 0;
				}
				select.form-control {
				  -webkit-appearance: none;
				  appearance: none;
				  background-image: url(./Assets/images/Utilities/arrow-down-767cbceaad.svg);
				  background-position: center right 4px;
				  background-repeat: no-repeat;
				  background-size: initial;
				}
				.cart-item .amount-section select {
				  float: left;
				  margin: 0;
				}
				.cart-item .item-variation {
				  margin: 0;
				  padding: 0;
				  display: none;
				}
				.original-price {
				  color: #aaa;
				  font-size: .9rem;
				  font-weight: 400;
				  line-height: 1.3rem;
				  text-decoration: line-through;
				}
				.discount {
				  color: #333;
				  font-size: .9rem;
				  font-weight: 400;
				  line-height: 1.3rem;
				}
				.lowest-price .price-main-md {
				  color: #333;
				  font-weight: 400;
				}
				.price-main-md, .price-promotional, .price-secondary-md {
				  font-size: 1.15rem;
				  font-weight: 700;
				  line-height: 1.4rem;
				}
				.price-promotional {
				  color: #ea2840;
				}
				.cart-item .cart-actions {
				  margin-bottom: 20px;
				  text-align: right;
				}
				.cart-item .cart-actions a{
				  color: #f50;
				  font-weight: 700;
				  padding-left: 24px;
				}
				.cart-summary-section {
				  padding-left: 28px;
				  padding-right: 0;
				}
				.cart-summary-section .summary-container {
				  border-left: 1px solid #ccc;
				  margin-left: -1px;
				  padding-left: 24px;
				  padding-right: 24px;
				}
				.title-summary {
				  border-bottom: 1px solid #ccc;
				  padding-bottom: 16px;
				  text-transform: uppercase;
				  width: 100%;
				  font-size: 1rem;
    			line-height: 1.5rem;
    			font-weight: 600;
				}
				.summary {
				  color: #666;
				  list-style-type: none;
				  margin: 8px 0;
				  padding-left: 0;
				}
				.summary li {
				  border-bottom: 1px solid #ccc;
				  margin-left: 0;
				  padding-bottom: .5rem;
				  margin-bottom: 8px;
				}
				.summary p {
				  display: inline-block;
				  font-family: Arial,Roboto,"-apple-system",Helvetica,sans-serif;
				  font-size: .9rem;
				  font-weight: 400;
				  margin: 0;
				}
				.summary .shipping-price, .summary .subtotal-price {
				  margin-top: 2px;
				  font-weight: 600;
				}
				.price-main-sm {
				  color: #ea2840;
				}
				.summary-total h3 {
				  margin: 0;
				  text-transform: uppercase;
				  font-size: 1rem;
    			line-height: 1.5rem;
    			font-weight: 600;
				}
				.price-main-md {
				  color: #ea2840;
				}
				.sprite-customer-protection {
				  background-image: url(./Assets/images/Utilities/alice-236d7abe83-1ca41363d3.png);
				  background-position: center;
			    width: 154px;
			    height: 46px;
			    background-repeat: no-repeat;
				}
				.vertical-usp .usp-cart-container .badge-customer-protection .icon {
				  display: block;
				  margin: 0 auto 20px;
				}
				.vertical-usp .usp {
				  display: table;
				  margin-bottom: 12px;
				}
				.vertical-usp .usp .usp-icon {
				  color: #666;
				  display: table-cell;
				  font-size: 32px;
				  padding-right: 8px;
				  -webkit-transform: none;
				  transform: none;
				  vertical-align: top;
				}
				.vertical-usp .usp .usp-title {
				  display: inline-block;
				  margin-top: 5px;
				  color: #666;
			    font-size: 1rem;
			    font-weight: 400;
			    line-height: 1.6rem;
				}
				/* MEDIA QUERIES */
				@media (min-width: 992px){				
					.cart-summary-section .summary-container {
					    border: 1px solid #ccc;
					    padding-top: 16px;
					}
				}
			</style>
			<div ng-show="cart.isReady" class="" style="">
    		<div class="row">
		      <div class="col-lg-9 col-12">
		        <div class="cart-item-section" ng-if="!cart.data.isEmpty()" style="">  
		          <h1 class="title-section">Carrito de compras</h1>
							<div class="cart-items row" ng-repeat="item in cart.data.items">
							  <div class="cart-item row">
							    <div class="col-md-11">
								    <div class="row">
								      <div class="col-2">
								        <div class="image-container">
								          <a href="/p/laptop-hp-15-dy2059la-windows-10-intel-core-i3-1115g4-8gb-ram-256gb-156-ops6nl" title="Laptop HP 15-dy2059la Windows 10 Intel Core i3-1115G4 8GB RAM 256GB 15.6">
								            <img ng-src="//i.linio.com/p/7600337076e451673ff2c2aec7077574-cart.jpg" alt="Laptop HP 15-dy2059la Windows 10 Intel Core i3-1115G4 8GB RAM 256GB 15.6" src="//i.linio.com/p/7600337076e451673ff2c2aec7077574-cart.jpg">
								          </a>
								        </div>
								      </div>
								      <div class="item-title col-10">
								        <span>
								        	<a href="/p/laptop-hp-15-dy2059la-windows-10-intel-core-i3-1115g4-8gb-ram-256gb-156-ops6nl">Laptop HP 15-dy2059la Windows 10 Intel Core i3-1115G4 8GB RAM 256GB 15.6</a>
								        </span>
										  <div ng-switch="item.conditionTypeNote">
										    <span ng-switch-default="" class="badge-condition-type">Nuevo</span>										    
										  </div>
								        <ul class="item-variation ng-hide" ng-show="item.variation &amp;&amp; item.variation != '...' &amp;&amp; item.variation != '…'">
								          <li ng-show="item.variationType == 'size'" class="ng-hide">Talla: …</li>
								          <li ng-show="item.variationType != 'size'">Opción: …</li>
								        </ul>
								      </div>
								    </div>
								    <div class="row">
								      <div class="col-12 offset-md-2">
								        <div class="price-section">          
								          <div class="discount-container" ng-show="item.percentageOff">
								            <span class="original-price"> S/ 2,099.00</span>
								            <span class="discount" ng-if="item.percentageOff >= 1">- 38%</span>            
								          </div>
								          <div>
								            <div class="lowest-price">
								              <div class="price-main-md">S/ 1,299.00</div>
								            </div>
								            <div class="lowest-price" ng-repeat="promotionalPrice in item.promotionalPrices" ng-if="promotionalPrice.amount < item.unitPrice">
								              <span class="price-promotional">S/ 1,259.00</span>
								              <span class="sprite sprite-cmr_pe-sm"></span>
								            </div>
								          </div>
								        </div>
			        					<!-- 
			        					<div>
								          <div class="shipping-estimate-section">
								    				<div ng-if="item.selectedShipping &amp;&amp; !item.virtual">
								    					<span class="cart-shipping-icon icon"></span>
								  					</div>
								  					<div class="cart-store-pickup-post-icon-aligner">
								    					<div ng-if="!item.virtual">
								        				<div class="delivery-date" ng-if="item.selectedShipping">
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
							    <div class="amount-section col-md-1 col-12">
							      <select class="form-control form-control-sm ng-pristine ng-valid ng-not-empty ng-touched" ng-model="item.quantity" ng-options="quantity for quantity in [] | range:1:item.maxItemsToSell track by quantity" ng-change="cart.updateQuantity(item.sku, item.quantity)" style=""><option label="1" value="1" selected="selected">1</option><option label="2" value="2">2</option><option label="3" value="3">3</option><option label="4" value="4">4</option><option label="5" value="5">5</option><option label="6" value="6">6</option><option label="7" value="7">7</option><option label="8" value="8">8</option><option label="9" value="9">9</option><option label="10" value="10">10</option></select>
							    </div>
							    <div class="cart-actions col-12">
						        <a href="javascript:void(0);" title="Eliminar producto">Eliminar</a>
							    </div>
			  				</div>
							</div>
							<div class="cart-items row" ng-repeat="item in cart.data.items">
							  <div class="cart-item row">
							    <div class="col-md-11">
								    <div class="row">
								      <div class="col-2">
								        <div class="image-container">
								          <a href="/p/preventa-god-of-war-ragnarok-polo-playstation-4-latam-qbiw1m" title="Preventa God Of War Ragnarok + Polo Playstation 4 Latam">
								            <img ng-src="//i.linio.com/p/40ee2b6e2234f735706e8dceffb430f0-cart.jpg" alt="Preventa God Of War Ragnarok + Polo Playstation 4 Latam" src="//i.linio.com/p/40ee2b6e2234f735706e8dceffb430f0-cart.jpg">
								          </a>
								        </div>
								      </div>
								      <div class="item-title col-10">
								        <span>
								        	<a href="/p/preventa-god-of-war-ragnarok-polo-playstation-4-latam-qbiw1m">Preventa God Of War Ragnarok + Polo Playstation 4 Latam</a>
								        </span>
								  		<div ng-switch="item.conditionTypeNote">
								    		<span ng-switch-default="" class="badge-condition-type">Nuevo</span>
								  		</div>
								        <ul class="item-variation" ng-show="item.variation &amp;&amp; item.variation != '...' &amp;&amp; item.variation != '…'">
								          <li ng-show="item.variationType == 'size'" class="ng-hide">Talla: S</li>
								          <li ng-show="item.variationType != 'size'">Opción: S</li>
								        </ul>
								      </div>
								    </div>
								    <div class="row">
								      <div class="col-12 offset-md-2">
								        <div class="price-section">          
								          <div class="discount-container" ng-show="item.percentageOff">
								            <span class="original-price"> S/ 370.00</span>
								              <span class="discount" ng-if="item.percentageOff >= 1">- 31%</span>            
								          </div>
								          <div>
								            <div class="lowest-price">
								              <div class="price-main-md">S/ 255.00</div>
								            </div>
								          </div>
								        </div>
												<!-- 
								        <div>
									        <div class="shipping-estimate-section">
												    <div ng-if="item.selectedShipping &amp;&amp; !item.virtual">
													    <span class="cart-shipping-icon icon"></span>
													  </div>
													  <div class="cart-store-pickup-post-icon-aligner"> 
													    <div ng-if="!item.virtual">
													      <div class="delivery-date" ng-if="item.selectedShipping">
															    <p>Entrega estimada: 11 de noviembre</p>
															  </div>
													    </div>
													  </div>
													</div>
								        </div>
								         -->
								      </div>
								     </div>
							    </div>
							    <div class="amount-section col-md-1 col-12">
							      <select class="form-control form-control-sm ng-pristine ng-valid ng-not-empty ng-touched" ng-model="item.quantity" ng-options="quantity for quantity in [] | range:1:item.maxItemsToSell track by quantity" ng-change="cart.updateQuantity(item.sku, item.quantity)" style=""><option label="1" value="1" selected="selected">1</option><option label="2" value="2">2</option><option label="3" value="3">3</option><option label="4" value="4">4</option><option label="5" value="5">5</option><option label="6" value="6">6</option><option label="7" value="7">7</option><option label="8" value="8">8</option><option label="9" value="9">9</option><option label="10" value="10">10</option></select>
							    </div>
			    				<div class="cart-actions col-12">
			            	<a href="javascript:void(0);" title="Eliminar producto">Eliminar</a>
			    				</div>
			  				</div>
							</div>
		      	</div>
			      <div class="cart-item-section">
			      	<div ng-show="cart.savedForLaterReady" class="" style=""></div>
			      </div>
		    	</div>
	      	<div class="cart-summary-section col-xl-3 col-lg-3 col-md-12 col-12">
	        	<div class="summary-container">
	          	<h3 class="title-summary">Resumen de tu Pedido</h3>
		          <ul class="summary">
		            <li class="d-flex">
		              <p>Subtotal (2)</p>
		              <span class="price-main-sm float-right subtotal-price ml-auto">S/ 1,554.00</span>
		            </li>            
								<li ng-show="cart.data.originalShippingAmount >= 0" class="d-flex" style="">
		              <p>Envío</p>
		              <span class="price-base-md float-right shipping-price ml-auto ng-hide" ng-show="cart.data.originalShippingAmount > 0">S/ 0.00</span>
		              <!-- <span class="price-base-md float-right shipping-price ml-auto" ng-show="cart.data.originalShippingAmount == 0" style="">Envío gratis</span> -->
		            </li>
								<!-- <li ng-show="cart.data.cartRuleDiscount > 0" class="d-flex ng-hide">
		              <p>Descuento</p>
		              <span class="price-light-md float-right ml-auto">-S/ 0.00</span>
		            </li> -->
		            <ul class="summary-total-pay-section">
		              <li class="summary-total">
		                <h3 class="d-flex justify-content-between">Total
		                	<span class="price-main-md" ng-bind="cart.data.grandTotal|formatMoney">S/ 1,554.00</span>
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