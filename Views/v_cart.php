<?php
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
require_once '../Config/Config.php';
require_once '../Helpers/Helpers.php';
require_once '../Models/categories.php';
require_once '../Models/products.php';
// VARIABLES DE CONTENIDO...
$m_prod = new Products();
$m_categories = new Categories();
$arrCategories = $m_categories->listCategs_1line(); // VARIABLE TEMPORAL
// VARIABLES DE PÁGINA...
$name_title_page = "Carrito de compras";
$page_title = ucwords($name_title_page)." - ".NOMBRE_EMPESA;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><?= $page_title;?></title>
  <?php require_once './includes/inc-header-links_home.php';?>
  <!-- PLUGINS AND ASSETS - HOME -->
  <!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body class="animsition">
	<?php require_once './includes/inc-header-top_home.php';?>
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?= base_url();?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				<?= $page_title; ?>
			</span>
		</div>
	</div>
	<?php
	$subtotal = 0;
	$total = 0;
	if (isset($_SESSION['arrCarrito']) && count($_SESSION['arrCarrito']) > 0) {
	?>
		<div class="container  mt-3 mb-3">
			<div ng-show="cart.isReady" class="">
    		<div class="row">
		      <div class="col-lg-9 col-12">
		        <div class="cart-item-section" ng-if="!cart.data.isEmpty()">  
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
							      <select class="form-control form-control-sm ng-pristine ng-valid ng-not-empty ng-touched" ng-model="item.quantity" ng-options="quantity for quantity in [] | range:1:item.maxItemsToSell track by quantity" ng-change="cart.updateQuantity(item.sku, item.quantity)"><option label="1" value="1" selected="selected">1</option><option label="2" value="2">2</option><option label="3" value="3">3</option><option label="4" value="4">4</option><option label="5" value="5">5</option><option label="6" value="6">6</option><option label="7" value="7">7</option><option label="8" value="8">8</option><option label="9" value="9">9</option><option label="10" value="10">10</option></select>
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
							      <select class="form-control form-control-sm ng-pristine ng-valid ng-not-empty ng-touched" ng-model="item.quantity" ng-options="quantity for quantity in [] | range:1:item.maxItemsToSell track by quantity" ng-change="cart.updateQuantity(item.sku, item.quantity)"><option label="1" value="1" selected="selected">1</option><option label="2" value="2">2</option><option label="3" value="3">3</option><option label="4" value="4">4</option><option label="5" value="5">5</option><option label="6" value="6">6</option><option label="7" value="7">7</option><option label="8" value="8">8</option><option label="9" value="9">9</option><option label="10" value="10">10</option></select>
							    </div>
			    				<div class="cart-actions col-12">
			            	<a href="javascript:void(0);" title="Eliminar producto">Eliminar</a>
			    				</div>
			  				</div>
							</div>
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
		              <span class="price-main-sm float-right subtotal-price ml-auto">S/ 1,554.00</span>
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
	<?php } ?>
	<?php require_once './includes/inc-footer_home.php';?>
	<script src="<?= media();?>/tienda/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= media();?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media();?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= media();?>/js/fontawesome.js"></script>
	<script src="<?= media();?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/tienda/js/functions.js"></script>
  <script src="<?= media();?>/js/bootstrap-bundle.js"></script>
  <script src="<?= media();?>/js/meanmenu.js"></script>
  <script src="<?= media();?>/js/swiper-bundle.js"></script>
  <script src="<?= media();?>/js/owl-carousel.js"></script>
  <script src="<?= media();?>/js/nice-select.js"></script>
  <script src="<?= media();?>/js/countdown.min.js"></script>
  <script src="<?= media();?>/js/counterup.js"></script>
  <script src="<?= media();?>/js/main-web.js"></script>
	<script type="text/javascript" src="<?= media();?>/js/actions/inc-login.js"></script>
</body>
</html>