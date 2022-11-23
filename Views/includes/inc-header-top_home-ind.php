<?php 

?>
<div id="divLoading">
	<div>
		<img src="<?= media();?>/images/loading.svg" alt="Loading">
	</div>
</div>
<header class="header d-blue-bg">
	<div class="header-top" id="head-banner_hTop">
		<div class="container">
			<div class="header-inner">
				<div class="row align-items-center">
					<div class="col-xl-12 col-lg-12">
						<div class="header-inner-start">
							<div class="support d-none d-sm-block">
								<p> ¿Ya aprovechaste las ofertas Prime Day? <a href="javascript:void(0);" class="st-btn b-radius">Ver ofertas</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-mid">
		<div class="container">
			<div class="heade-mid-inner">
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
						<div class="header__info">
							<div class="logo">
								<a href="<?= base_url();?>" class="logo-image"><img src="<?= media();?>/images/logo/logo.png" alt="logo"></a>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-lg-7 d-none d-lg-block">
						<div class="header__search">
							<form action="#">
								<div class="header__search-cat">
									<select>
										<option>Todas las categorías</option>
										<option>Productos más vendidos</option>
										<option>Las 10 mejores ofertas</option>
										<option>Los recién llegados</option>
									</select>
								</div>
								<div class="header__search-box">
									<div>
										<input class="search-input" type="text" placeholder="Estoy comprando...">
									</div>
									<button class="button" type="submit"><i class="far fa-search"></i></button>
								</div>									
							</form>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 ml-auto">
						<div class="header-action">
							<div class="block-userlink">
								<?php
									$tmp_loguser = "";
									if(isset($_SESSION) && isset($_SESSION['usr-logg_DATAPLUS'])){
										// $usr_name = $_SESSION['usr-logg_DATAPLUS']['u_firstname'] . ' ' . $_SESSION['usr-logg_DATAPLUS']['u_lastname'];
										$usr_name = explode(" ", $_SESSION['usr-logg_DATAPLUS']['u_firstname']);
										$tmp_loguser = "
											<div>
												<a href='javascript:void(0);' class='icon-link nav-link dropdown-toggle' id='LoginDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													<i class='flaticon-user'></i>
													<span class='text'>Bienvenido: {$usr_name[0]}</span>
												</a>
												<div class='dropdown-menu' aria-labelledby='LoginDropdown'>
								          <a class='dropdown-item' href='javascript:void(0);'>Mi cuenta</a>
								          <a class='dropdown-item' href='javascript:void(0);' id='u-close_logg'>Cerrar sesión</a>
								        </div>
											</div>
										";
									}else{
										$tmp_loguser = "
											<div>
												<a href='".base_url()."/login' class='icon-link'>
													<i class='flaticon-user'></i>
													<span class='text'>
														<span class='sub'>Login </span>
														Iniciar Sesión
													</span>
												</a>
											</div>
										";
									}
									echo $tmp_loguser;
								?>
							</div>
							<div class="block-cart action">
								<a class="wrap-icon-header flex-w flex-r-m" data-dropdown-custommenu="cart-menu">
									<?php
										$tmp_cartinit = "";
										if(isset($_SESSION['arrCarrito']) && $_SESSION['arrCarrito'] != "" && count($_SESSION['arrCarrito']) > 0){
											$tmp_cartinit = "
												<div class='icon-link cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart' data-notify='{$cantCarrito}'>
													<i class='flaticon-shopping-bag'></i>
												</div>
											";
										}else{
											$tmp_cartinit = "
												<div class='icon-link cantCarrito icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart'>
													<i class='flaticon-shopping-bag'></i>
												</div>
											";
										}
										echo $tmp_cartinit;
									?>
								</a>
								<div class="cdetList__incart hide d-none">
									<div id="cart-menu" class="header-info-menu qv-cart">
									  <div id="quick-cart-loading" class="loading-overlay hide"></div>
									  <div id="quick-cart-content">
									  	<?php
										  	$tmpCartListDropdown = "";
												$subtotal = 0;
												$totalQuantity = 0;
									  		if(isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0){
									  			$totalQuantity = count($_SESSION['arrCarrito']);
									  			foreach($_SESSION['arrCarrito'] as $producto){
														$total += $producto['cantidad'] * $producto['precio'];
														$idProducto = openssl_encrypt($producto['idproducto'], METHODENCRIPT, KEY);
														$pcart_img = $producto['imagen'];
														$pcart_name = $producto['producto'];
														$pcart_quantity = $producto['cantidad'];
														$pcart_price =  SMONEY . formatMoney($producto['precio']);
														$tmpCartListDropdown .= "															
													  	<div class='item'>
												  			<div class='image'>
												  			<img src='{$pcart_img}'></div>
												  			<div class='info'>
												  				<div class='product-name'>{$pcart_name}</div>
												  				<div class='product-price'>{$pcart_price}</div>
												  				<div class='product-quantity'>Cantidad: <span>{$pcart_quantity}</span></div>
												  			</div>
												  		</div>
														";
													}
													$subtotal = SMONEY . formatMoney($total);
									  			$tmpCartListDropdown .= "
										  			<div class='subtotal'>Subtotal ({$totalQuantity})
										  				<div class='subtotal-price'>{$subtotal}</div>
										  			</div>
									  			";
									  		}else{
									  			$tmpCartListDropdown = "
													  <div id='quick-cart-no-products' class='empty-cart-menu'>
													    <span class='empty-cart-title'>No tienes productos en tu carrito.</span>
													    <span>¡Empieza a comprar ahora!.</span>
													  </div>
									  			";
									  		}
									  		echo $tmpCartListDropdown;
									  	?>
								  	</div>
									  <div id="quick-cart-footer" class="quick-view-footer">
									    <a href="carrito">Ir a mi carrito</a>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header__bottom">
						<div class="row g-0 align-items-center">
							<div class="col-lg-3 col-md-12 col-sm-12">
								<div class="cat__menu-wrapper side-border d-none d-lg-block">
									<div class="cat-toggle">
										<button type="button" class="cat-toggle-btn cat-toggle-btn-1" data-dropdown-custommenu="listAllCateg-menu">
											<i class="fal fa-bars"></i> 
											<span>Todas las categorías</span>
										</button>
										<div class="cat__menu">
											<nav id="mobile-menu" style="display: block;">
												<ul>
													<?php
													/*
													echo "<pre>";
													print_r($data);
													echo "</pre>";
													*/
												if(count($arrCategories) > 0){
													foreach ($arrCategories as $categoria) {	
													// print_r( $categoria);
												?>
												<li>
													<a href="shop.html"><?= $categoria['nombre'] ?> <i class="far fa-angle-down"></i></a>													
															<ul class="mega-menu">
																<div class="row">
																	<!-- <div class="col-xl-6 col-lg-6 col-md-6"> -->
																	<div class="col-xl-12 col-lg-12 col-md-12">
																		<div class="mega-menu__cTitle">
																			<h2 class="mega-menu__cTitle--title"><?= $categoria['nombre']; ?></h2>
																		</div>
																		<ul class="mega-sub-menu">
																			<li><a href="shop.html">Páginas de la tienda</a>
																				<ul class="mega-item">
																					<li><a href="product-details.html">Standard SHop Page</a></li>
																					<li><a href="product-details.html">Shop Right Sidebar</a></li>
																					<li><a href="product-details.html">Shop Left Sidebar</a></li>
																					<li><a href="product-details.html">Shop 3 Column</a></li>
																					<li><a href="product-details.html">Shop 4 Column</a></li>
																				</ul>
																			</li>
																			<li><a href="shop.html">Páginas de productos</a>
																				<ul class="mega-item">
																					<li><a href="product-details.html">Product Details</a></li>
																					<li><a href="product-details.html">Product V2</a></li>
																					<li><a href="product-details.html">Product V3</a></li>
																					<li><a href="product-details.html">Varriable Product</a></li>
																					<li><a href="product-details.html">External Product</a></li>
																				</ul>
																			</li>
																			<li><a href="shop.html">Otras páginas</a>
																				<ul class="mega-item">
																					<li><a href="product-details.html">wishlist</a></li>
																					<li><a href="product-details.html">Shopping Cart</a></li>
																					<li><a href="product-details.html">Checkout</a></li>
																					<li><a href="product-details.html">Login</a></li>
																					<li><a href="product-details.html">Register</a></li>
																				</ul>
																			</li>
																			<li><a href="shop.html">Phone &amp; Tablets</a>
																				<ul class="mega-item">
																					<li><a href="product-details.html">Catagory 1</a></li>
																					<li><a href="product-details.html">Catagory 2</a></li>
																					<li><a href="product-details.html">Catagory 3</a></li>
																				</ul>
																			</li>
																			<li><a href="shop.html">Phone &amp; Tablets</a>
																				<ul class="mega-item">
																					<li><a href="product-details.html">Catagory 1</a></li>
																					<li><a href="product-details.html">Catagory 2</a></li>
																					<li><a href="product-details.html">Catagory 3</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																	<!-- 
																	<div class="col-xl-6 col-lg-6 col-md-6">
																		<p><img src="<?= media();?>/images/banner/banner-1.jpg" alt=""></p>
																		<div class="row">
																			<div class="product-bs-slider">
																				<div class="product-slider swiper-container">
																					<div class="swiper-wrapper">
																						<div class="product__item swiper-slide">
																							<div class="product__thumb fix">
																								<div class="product-image w-img">
																									<a href="product-details.html">
																										<img src="<?= media();?>/images/product/tp-1.jpg" alt="product">
																									</a>
																								</div>
																								<div class="product__offer">
																									<span class="discount">-15%</span>
																								</div>
																								<div class="product-action">
																									<a href="javascript:void(0);" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																										<i class="fal fa-eye"></i>
																										<i class="fal fa-eye"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-heart"></i>
																										<i class="fal fa-heart"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-layer-group"></i>
																										<i class="fal fa-layer-group"></i>
																									</a>
																								</div>
																							</div>
																							<div class="product__content">
																								<h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
																								<div class="rating mb-5">
																									<ul>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																									</ul>
																									<span>(01 review)</span>
																								</div>
																								<div class="price mb-10">
																									<span>$105-$110</span>
																								</div>
																								<div class="progress-rate">
																									<span>Sold:312/1225</span>
																								</div>
																							</div>
																							<div class="product__add-cart text-center">
																								<button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																									Add to Cart
																								</button>
																							</div>
																						</div>
																						<div class="product__item swiper-slide">
																							<div class="product__thumb fix">
																								<div class="product-image w-img">
																									<a href="product-details.html">
																										<img src="<?= media();?>/images/product/tp-2.jpg" alt="product">
																									</a>
																								</div>
																								<div class="product-action">
																									<a href="javascript:void(0);" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																										<i class="fal fa-eye"></i>
																										<i class="fal fa-eye"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-heart"></i>
																										<i class="fal fa-heart"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-layer-group"></i>
																										<i class="fal fa-layer-group"></i>
																									</a>
																								</div>
																							</div>
																							<div class="product__content">
																								<h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
																								<div class="rating mb-5">
																									<ul>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																									</ul>
																									<span>(01 review)</span>
																								</div>
																								<div class="price mb-10">
																									<span>$105-$150</span>
																								</div>
																								<div class="progress-rate">
																									<span>Sold:315/1225</span>
																								</div>
																							</div>
																							<div class="product__add-cart text-center">
																								<button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																									Add to Cart
																								</button>
																							</div>
																						</div>
																						<div class="product__item swiper-slide">
																							<div class="product__thumb fix">
																								<div class="product-image w-img">
																									<a href="product-details.html">
																										<img src="<?= media();?>/images/product/tp-3.jpg" alt="product">
																									</a>
																								</div>
																								<div class="product__offer">
																									<span class="discount">-9%</span>
																								</div>
																								<div class="product-action">
																									<a href="javascript:void(0);" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																										<i class="fal fa-eye"></i>
																										<i class="fal fa-eye"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-heart"></i>
																										<i class="fal fa-heart"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-layer-group"></i>
																										<i class="fal fa-layer-group"></i>
																									</a>
																								</div>
																							</div>
																							<div class="product__content">
																								<h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
																								<div class="rating mb-5">
																									<ul>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																									</ul>
																									<span>(01 review)</span>
																								</div>
																								<div class="price mb-10">
																									<span>$200-$280</span>
																								</div>
																								<div class="progress-rate">
																									<span>Sold:370/1225</span>
																								</div>
																							</div>
																							<div class="product__add-cart text-center">
																								<button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																									Add to Cart
																								</button>
																							</div>
																						</div>
																						<div class="product__item swiper-slide">
																							<div class="product__thumb fix">
																								<div class="product-image w-img">
																									<a href="product-details.html">
																										<img src="<?= media();?>/images/product/tp-4.jpg" alt="product">
																									</a>
																								</div>
																								<div class="product-action">
																									<a href="javascript:void(0);" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																										<i class="fal fa-eye"></i>
																										<i class="fal fa-eye"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-heart"></i>
																										<i class="fal fa-heart"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-layer-group"></i>
																										<i class="fal fa-layer-group"></i>
																									</a>
																								</div>
																							</div>
																							<div class="product__content">
																								<h6><a href="product-details.html">Wireless Bluetooth Over-Ear Headphones</a></h6>
																								<div class="rating mb-5">
																									<ul>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																									</ul>
																									<span>(01 review)</span>
																								</div>
																								<div class="price mb-10">
																									<span>$100-$180</span>
																								</div>
																								<div class="progress-rate">
																									<span>Sold:420/1225</span>
																								</div>
																							</div>
																							<div class="product__add-cart text-center">
																								<button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																									Add to Cart
																								</button>
																							</div>
																						</div>
																						<div class="product__item swiper-slide">
																							<div class="product__thumb fix">
																								<div class="product-image w-img">
																									<a href="product-details.html">
																										<img src="<?= media();?>/images/product/tp-5.jpg" alt="product">
																									</a>
																								</div>
																								<div class="product__offer">
																									<span class="discount">-10%</span>
																								</div>
																								<div class="product-action">
																									<a href="javascript:void(0);" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																										<i class="fal fa-eye"></i>
																										<i class="fal fa-eye"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-heart"></i>
																										<i class="fal fa-heart"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-layer-group"></i>
																										<i class="fal fa-layer-group"></i>
																									</a>
																								</div>
																							</div>
																							<div class="product__content">
																								<h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a></h6>
																								<div class="rating mb-5">
																									<ul>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																									</ul>
																									<span>(01 review)</span>
																								</div>
																								<div class="price mb-10">
																									<span><del>$270</del> $200</span>
																								</div>
																								<div class="progress-rate">
																									<span>Sold:312/1225</span>
																								</div>
																							</div>
																							<div class="product__add-cart text-center">
																								<button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																									Add to Cart
																								</button>
																							</div>
																						</div>
																						<div class="product__item swiper-slide">
																							<div class="product__thumb fix">
																								<div class="product-image w-img">
																									<a href="product-details.html">
																										<img src="<?= media();?>/images/product/tp-6.jpg" alt="product">
																									</a>
																								</div>
																								<div class="product-action">
																									<a href="javascript:void(0);" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																										<i class="fal fa-eye"></i>
																										<i class="fal fa-eye"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-heart"></i>
																										<i class="fal fa-heart"></i>
																									</a>
																									<a href="javascript:void(0);" class="icon-box icon-box-1">
																										<i class="fal fa-layer-group"></i>
																										<i class="fal fa-layer-group"></i>
																									</a>
																								</div>
																							</div>
																							<div class="product__content">
																								<h6><a href="product-details.html">Vifa Bluetooth Portable Wireless Speaker</a></h6>
																								<div class="rating mb-5">
																									<ul>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																										<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
																									</ul>
																									<span>(01 review)</span>
																								</div>
																								<div class="price mb-10">
																									<span>$150-$270</span>
																								</div>
																								<div class="progress-rate">
																									<span>Sold:370/1225</span>
																								</div>
																							</div>
																							<div class="product__add-cart text-center">
																								<button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																									Add to Cart
																								</button>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
																				<div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
																			</div>
																		</div>
																	</div>
																	-->
																</div>
															</ul>													
													</li>
												<?php
													}
												}
												?>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-3">
								<div class="header__bottom-left d-flex d-xl-block align-items-center">
									<div class="side-menu d-lg-none mr-20">
									  <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
									</div>
									<div class="main-menu d-none d-lg-block">
								    <nav>
							        <ul>
						            <li><a href="javascript:void(0);" class="active">Ofertas</a></li>
						            <li><a href="javascript:void(0);">Costos y tarifas</a></li>
						            <li><a href="javascript:void(0);">Mis pedidos</a></li>
						            <li><a href="javascript:void(0);">Garantía de entrega</a></li>
						            <li><a href="javascript:void(0);">Invita y Gana</a></li>
							        </ul>
								    </nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="offcanvas__area">
  <div class="offcanvas__wrapper">
	  <div class="offcanvas__close">
			<button class="offcanvas__close-btn" id="offcanvas__close-btn">
			  <i class="fal fa-times"></i>
			</button>
	  </div>
	  <div class="offcanvas__content">
      <div class="offcanvas__logo mb-40">
        <a href="/" style="max-width: 150px;width: 100%;display: table;background-color: #0d7af2;">
        	<img src="<?= media();?>/images/logo/logo.png" alt="logo">
        </a>
      </div>
      <div class="offcanvas__search mb-25">
				<form action="#">
				  <input type="text" placeholder="What are you searching for?">
				  <button type="submit"><i class="far fa-search"></i></button>
				</form>
      </div>
      <div class="mobile-menu fix mean-container">
      	<div class="mean-bar">
      		<a href="#nav" class="meanmenu-reveal" style="right: 0px; left: auto; display: inline;">
      			<span>
      				<span>
      					<span></span>
      				</span>
      			</span>
      		</a>
      		<nav class="mean-nav">
            <ul style="display: none;">
                <li class="">
                  <a href="shop.html">All Categories <i class="far fa-angle-down"></i></a>
                  <ul class="mega-menu" style="display: none;">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6">
                        <ul style="display: none;">
                          <li>
                          	<a href="shop.html">Shop Pages</a>
                              <ul class="mega-item" style="display: none;">
                                  <li><a href="javascript:void(0);">Standard SHop Page</a></li>
                                  <li><a href="javascript:void(0);">Shop Right Sidebar</a></li>
                                  <li><a href="javascript:void(0);">Shop Left Sidebar</a></li>
                                  <li><a href="javascript:void(0);">Shop 3 Column</a></li>
                                  <li><a href="javascript:void(0);">Shop 4 Column</a></li>
                              </ul>
                          	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                        	</li>
                          <li>
                          	<a href="shop.html">Product Pages</a>
                              <ul class="mega-item" style="display: none;">
                                  <li><a href="javascript:void(0);">Product Details</a></li>
                                  <li><a href="javascript:void(0);">Product V2</a></li>
                                  <li><a href="javascript:void(0);">Product V3</a></li>
                                  <li><a href="javascript:void(0);">Varriable Product</a></li>
                                  <li><a href="javascript:void(0);">External Product</a></li>
                              </ul>
                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                          </li>
                          <li>
                          	<a href="shop.html">Other Pages</a>
                              <ul class="mega-item" style="display: none;">
                                  <li><a href="javascript:void(0);">wishlist</a></li>
                                  <li><a href="javascript:void(0);">Shopping Cart</a></li>
                                  <li><a href="javascript:void(0);">Checkout</a></li>
                                  <li><a href="javascript:void(0);">Login</a></li>
                                  <li><a href="javascript:void(0);">Register</a></li>
                              </ul>
                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                          </li>
                          <li>
                          	<a href="shop.html">Phone &amp; Tablets</a>
                              <ul class="mega-item" style="display: none;">
                                <li><a href="javascript:void(0);">Catagory 1</a></li>
                                <li><a href="javascript:void(0);">Catagory 2</a></li>
                                <li><a href="javascript:void(0);">Catagory 3</a></li>
                            	</ul>
                          	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                          </li>
                          <li>
                          	<a href="shop.html">Phone &amp; Tablets</a>
                              <ul class="mega-item" style="display: none;">
                                <li><a href="javascript:void(0);">Catagory 1</a></li>
                                <li><a href="javascript:void(0);">Catagory 2</a></li>
                                <li><a href="javascript:void(0);">Catagory 3</a></li>
                              </ul>
                          	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                          </li>
                        </ul>
                      	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                      </div>
                    	<div class="col-xl-6 col-lg-6 col-md-6">
                        <p><img src="<?= media();?>/images/banner/banner-1.jpg" alt=""></p>
                        <div class="row">
                          <div class="product-bs-slider">
                            <div class="product-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-a3f0106c2942e706b" aria-live="off" style="transition-duration: 0ms;"><div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                                      <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                          <a href="javascript:void(0);">
                                            <img src="<?= media();?>/images/product/tp-2.jpg" alt="product">
                                          </a>
                                      	</div>
                                        <div class="product-action">
                                          <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <i class="fal fa-eye"></i>
                                            <i class="fal fa-eye"></i>
                                        	</a>
                                          <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-heart"></i>
                                            <i class="fal fa-heart"></i>
                                        	</a>
                                          <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-layer-group"></i>
                                            <i class="fal fa-layer-group"></i>
                                        	</a>
                                        </div>
                                      </div>
                                      <div class="product__content">
                                        <h6><a href="javascript:void(0);">Men Size Yellow Basketball Jerseys</a></h6>
                                        <div class="rating mb-5">
																					<ul style="display: none;">
																					  <li><a href="#"><i class="fal fa-star"></i></a></li>
																					  <li><a href="#"><i class="fal fa-star"></i></a></li>
																					  <li><a href="#"><i class="fal fa-star"></i></a></li>
																					  <li><a href="#"><i class="fal fa-star"></i></a></li>
																					  <li><a href="#"><i class="fal fa-star"></i></a></li>
																					</ul>
																					<span>(01 review)</span>
                                        <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                        <div class="price mb-10">
                                          <span>$105-$150</span>
                                        </div>
                                        <div class="progress-rate">
                                          <span>Sold:315/1225</span>
                                        </div>
                                      </div>
                                      <div class="product__add-cart text-center">
                                         <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">Add to Cart</button>
                                      </div>
                                    </div>
                                    <div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2">
                                      <div class="product__thumb fix">
                                        <div class="product-image w-img">
																					<a href="javascript:void(0);">
																					  <img src="<?= media();?>/images/product/tp-3.jpg" alt="product">
																					</a>
                                        </div>
                                        <div class="product__offer">
                                        <span class="discount">-9%</span>
                                        </div>
                                        <div class="product-action">
                                          <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <i class="fal fa-eye"></i>
                                            <i class="fal fa-eye"></i>
                                          </a>
                                          <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-heart"></i>
                                            <i class="fal fa-heart"></i>
                                          </a>
                                          <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-layer-group"></i>
                                            <i class="fal fa-layer-group"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="product__content">
																				<h6><a href="javascript:void(0);">Xbox Wireless Game Controller Pink</a></h6>
																				<div class="rating mb-5">
																				  <ul style="display: none;">
																			      <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      <li><a href="#"><i class="fal fa-star"></i></a></li>
																				  </ul>
																				  <span>(01 review)</span>
																					<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
																				</div>
																				<div class="price mb-10">
																				  <span>$200-$280</span>
																				</div>
																				<div class="progress-rate">
																				  <span>Sold:370/1225</span>
																				</div>
                                      </div>
                                      <div class="product__add-cart text-center">
                                        <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">Add to Cart</button>
                                      </div>
                                    </div>
                                    <div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3">
																			<div class="product__thumb fix">
																			  <div class="product-image w-img">
																			      <a href="javascript:void(0);">
																			          <img src="<?= media();?>/images/product/tp-4.jpg" alt="product">
																			      </a>
																			  </div>
																			  <div class="product-action">
																			      <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																			          <i class="fal fa-eye"></i>
																			          <i class="fal fa-eye"></i>
																			      </a>
																			      <a href="#" class="icon-box icon-box-1">
																			          <i class="fal fa-heart"></i>
																			          <i class="fal fa-heart"></i>
																			      </a>
																			      <a href="#" class="icon-box icon-box-1">
																			          <i class="fal fa-layer-group"></i>
																			          <i class="fal fa-layer-group"></i>
																			      </a>
																			  </div>
																			</div>
																			<div class="product__content">
																			  <h6><a href="javascript:void(0);">Wireless Bluetooth Over-Ear Headphones</a></h6>
																			  <div class="rating mb-5">
																			      <ul style="display: none;">
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      </ul>
																			      <span>(01 review)</span>
																			  <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
																			  <div class="price mb-10">
																			      <span>$100-$180</span>
																			  </div>
																			  
																			  <div class="progress-rate">
																			      <span>Sold:420/1225</span>
																			  </div>
																			</div>
																			<div class="product__add-cart text-center">
																			  <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">Add to Cart</button>
																			</div>
                                    </div>
                                    <div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4">
																			<div class="product__thumb fix">
																			  <div class="product-image w-img">
																			      <a href="javascript:void(0);">
																			          <img src="<?= media();?>/images/product/tp-5.jpg" alt="product">
																			      </a>
																			  </div>
																			  <div class="product__offer">
																			  <span class="discount">-10%</span>
																			  </div>
																			  <div class="product-action">
																			      <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																			          <i class="fal fa-eye"></i>
																			          <i class="fal fa-eye"></i>
																			      </a>
																			      <a href="#" class="icon-box icon-box-1">
																			          <i class="fal fa-heart"></i>
																			          <i class="fal fa-heart"></i>
																			      </a>
																			      <a href="#" class="icon-box icon-box-1">
																			          <i class="fal fa-layer-group"></i>
																			          <i class="fal fa-layer-group"></i>
																			      </a>
																			  </div>
																			</div>
																			<div class="product__content">
																			  <h6><a href="javascript:void(0);">Solo3 Wireless On-Ear Headphones</a></h6>
																			  <div class="rating mb-5">
																			      <ul style="display: none;">
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      </ul>
																			      <span>(01 review)</span>
																			  <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
																			  <div class="price mb-10">
																			      <span><del>$270</del> $200</span>
																			  </div>
																			  
																			  <div class="progress-rate">
																			      <span>Sold:312/1225</span>
																			  </div>
																			</div>
																			<div class="product__add-cart text-center">
																			  <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
																			  Add to Cart
																			  </button>
																			</div>
                                    </div>
                                    <div class="product__item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="5">
																			<div class="product__thumb fix">
																			  <div class="product-image w-img">
																			      <a href="javascript:void(0);">
																			          <img src="<?= media();?>/images/product/tp-6.jpg" alt="product">
																			      </a>
																			  </div>
																			  <div class="product-action">
																			      <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
																			          <i class="fal fa-eye"></i>
																			          <i class="fal fa-eye"></i>
																			      </a>
																			      <a href="#" class="icon-box icon-box-1">
																			          <i class="fal fa-heart"></i>
																			          <i class="fal fa-heart"></i>
																			      </a>
																			      <a href="#" class="icon-box icon-box-1">
																			          <i class="fal fa-layer-group"></i>
																			          <i class="fal fa-layer-group"></i>
																			      </a>
																			  </div>
																			</div>
																			<div class="product__content">
																			  <h6><a href="javascript:void(0);">Vifa Bluetooth Portable Wireless Speaker</a></h6>
																			  <div class="rating mb-5">
																			      <ul style="display: none;">
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			          <li><a href="#"><i class="fal fa-star"></i></a></li>
																			      </ul>
																			      <span>(01 review)</span>
																			  <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
																			  <div class="price mb-10">
																			      <span>$150-$270</span>
																			  </div>
																			 
																			  <div class="progress-rate">
																			      <span>Sold:370/1225</span>
																			  </div>
																			</div>
																			<div class="product__add-cart text-center">
																			  <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">Add to Cart</button>
																			</div>
                                    </div>
                                    <div class="product__item swiper-slide" data-swiper-slide-index="0">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                            <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$105-$110</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:312/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide" data-swiper-slide-index="1">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-2.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Men Size Yellow Basketball Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$105-$150</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:315/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide" data-swiper-slide-index="2">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-3.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                            <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Xbox Wireless Game Controller Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$200-$280</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:370/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide" data-swiper-slide-index="3">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-4.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Wireless Bluetooth Over-Ear Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$100-$180</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:420/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide" data-swiper-slide-index="4">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-5.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                            <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Solo3 Wireless On-Ear Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span><del>$270</del> $200</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:312/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product__item swiper-slide" data-swiper-slide-index="5">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Vifa Bluetooth Portable Wireless Speaker</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$150-$270</span>
                                            </div>
                                           
                                            <div class="progress-rate">
                                                <span>Sold:370/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                <div class="product__item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                            <span class="discount">-15%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$105-$110</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:312/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div><div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-2.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Men Size Yellow Basketball Jerseys</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$105-$150</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:315/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div><div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-3.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                            <span class="discount">-9%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Xbox Wireless Game Controller Pink</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$200-$280</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:370/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div><div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-4.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Wireless Bluetooth Over-Ear Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span>$100-$180</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:420/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div><div class="product__item swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= media();?>/images/product/tp-5.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__offer">
                                            <span class="discount">-10%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    <i class="fal fa-eye"></i>
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-heart"></i>
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#" class="icon-box icon-box-1">
                                                    <i class="fal fa-layer-group"></i>
                                                    <i class="fal fa-layer-group"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <h6><a href="javascript:void(0);">Solo3 Wireless On-Ear Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul style="display: none;">
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            <a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></div>
                                            <div class="price mb-10">
                                                <span><del>$270</del> $200</span>
                                            </div>
                                            
                                            <div class="progress-rate">
                                                <span>Sold:312/1225</span>
                                            </div>
                                        </div>
                                        <div class="product__add-cart text-center">
                                            <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                            Add to Cart
                                            </button>
                                        </div>
                                    </div></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <!-- If we need navigation buttons -->
                            <div class="bs-button bs-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-510dd5b37e33826c8"><i class="fal fa-chevron-left"></i></div>
                            <div class="bs-button bs-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-510dd5b37e33826c8"><i class="fal fa-chevron-right"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </ul>
                	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></li>
                <li>
                  <a href="shop.html">Phone and Electronics <i class="far fa-angle-down"></i></a>
                </li>
                <li>
									<a href="shop.html">Best Seller Products
									  <span class="cat-label">hot!</span>
									  <i class="far fa-angle-down"></i>
									</a>
                </li>
                <li>
									<a href="shop.html">Top 10 Offers
									<span class="cat-label green">new!</span>
  								</a>
                </li>
                <li class="">
                  <a href="shop.html">New Arrivals <i class="far fa-angle-down"></i></a>
                  <ul class="submenu" style="display: none;">
                    <li><a href="shop.html">Home Appliances</a></li>
                    <li class=""><a href="shop.html">Technology</a>
                      <ul class="submenu" style="display: none;">
                        <li><a href="shop.html">Storage Devices</a></li>
                        <li><a href="shop.html">Monitors</a></li>
                        <li><a href="shop.html">Laptops</a></li>
                    	</ul>
                    	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a>
                  	</li>
                    <li><a href="shop.html">Office Equipments</a></li>
                  </ul>
                	<a class="mean-expand" href="#" style="font-size: 18px"><i class="fal fa-plus"></i></a></li>
                <li>
                	<a href="shop.html">TV &amp; Audio</a>
                </li>
                <li>
                	<a href="shop.html">Electronics &amp; Digital</a>
                </li>
                <li class="d-laptop-none">
                	<a href="shop.html">Fashion &amp; Clothings</a>
                </li>
                <li class="d-laptop-none">
                	<a href="shop.html">Jewelry &amp; Watches</a>
                </li>
                <li class="mean-last">
                	<a href="shop.html">Health &amp; Beauty</a>
                </li>
            </ul>
        	</nav>
      </div>
      </div>
	    <div class="offcanvas__action"></div>
	  </div>
  </div>
</div>
<div class="body-overlay"></div>

<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>
	<div class="header-cart flex-col-l p-l-65 p-4">
		<div class="row mb-3">
			<div class="col">
				<span class="mtext-103 cl2">
					Tu carrito
				</span>
			</div>
			<div class="col text-end cursor-pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>
		<div id="productosCarrito" class="header-cart-content flex-w js-pscroll">
			<?php require_once './Template/Modals/modalCarrito.php';?>
		</div>
	</div>
</div>