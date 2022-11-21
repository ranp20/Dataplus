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
								<a href="<?= base_url();?>" class="logo-image"><img src="<?= media(); ?>/images/logo/logo.png" alt="logo"></a>
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
									<input class="search-input" type="text" placeholder="Estoy comprando...">
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
									  	<div class="item">
								  			<div class="image">
								  			<img src="//i.linio.com/p/8b443471e2579a5ea30d59d179bcba4a-cart.jpg"></div>
								  			<div class="info">
								  				<div class="product-name">God Of War Ragnarok + Polo Pla...</div>
								  				<div class="product-price">S/ 265.00</div>
								  				<div class="product-quantity">Cantidad: <span>1</span></div>
								  			</div>
								  		</div>
								  		<div class="item">
								  			<div class="image">
								  				<img src="//i.linio.com/p/c82bc13feb84aeccc6580df78cc2f858-cart.jpg"></div>
								  				<div class="info">
								  					<div class="product-name">Xiaomi Redmi Note 11 Pro 128GB...</div>
								  					<div class="product-price">S/ 1,158.00</div>
								  					<div class="product-quantity">Cantidad: <span>1</span></div>
								  				</div>
								  		</div>
							  			<div class="item">
							  				<div class="image">
							  					<img src="//i.linio.com/p/807dcb80df15d97a99094f5fdcee9730-cart.jpg">
							  				</div>
							  				<div class="info">
							  					<div class="product-name">Xiaomi Redmi Note 11 4GB 128GB...</div>
							  					<div class="product-price">S/ 699.00</div>
							  					<div class="product-quantity">Cantidad: <span>1</span></div>
							  				</div>
							  			</div>
							  			<div class="subtotal">Subtotal (3)
							  				<div class="subtotal-price">S/ 2,122.00</div>
							  			</div>
								  	</div>
									  <div id="quick-cart-no-products" class="empty-cart-menu hide d-none">
									    <span class="empty-cart-title">No tienes productos en tu carrito.</span>
									    <span>¡Empieza a comprar ahora!.</span>
									  </div>
									  <div id="quick-cart-footer" class="quick-view-footer">
									    <a href="/cart">Ir a mi carrito</a>
									  </div>
									</div>
								</div>
							</div>
						</div>


					</div>
					<div class="header__bottom">
						<div class="container">
							<div class="row g-0 align-items-center">
								<div class="col-lg-3">
									<div class="cat__menu-wrapper side-border d-none d-lg-block">
										<div class="cat-toggle">
											<button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i class="fal fa-bars"></i> Todas las categorías</button>
											<div class="cat__menu">
												<nav id="mobile-menu" style="display: block;">
													<ul>
													<?php
														if(count($arrCategories) > 0){
															foreach ($arrCategories as $categoria){
															// print_r( $categoria);
													?>
													<li>
														<a href="shop.html"><?= $categoria['nombre'] ?> <i class="far fa-angle-down"></i></a>													
																<ul class="mega-menu">
																	<div class="row">
																		<div class="col-xl-6 col-lg-6 col-md-6">
																			<ul>
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
																		<div class="col-xl-6 col-lg-6 col-md-6">
																			<p><img src="<?= media(); ?>/images/banner/banner-1.jpg" alt=""></p>
																			<div class="row">
																				<div class="product-bs-slider">
																					<div class="product-slider swiper-container">
																						<div class="swiper-wrapper">
																							<div class="product__item swiper-slide">
																								<div class="product__thumb fix">
																									<div class="product-image w-img">
																										<a href="product-details.html">
																											<img src="<?= media(); ?>/images/product/tp-1.jpg" alt="product">
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
																											<img src="<?= media(); ?>/images/product/tp-2.jpg" alt="product">
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
																											<img src="<?= media(); ?>/images/product/tp-3.jpg" alt="product">
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
																											<img src="<?= media(); ?>/images/product/tp-4.jpg" alt="product">
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
																											<img src="<?= media(); ?>/images/product/tp-5.jpg" alt="product">
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
																											<img src="<?= media(); ?>/images/product/tp-6.jpg" alt="product">
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
								<div class="col-lg-6 col-md-6 col-3">
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
	</div>
</header>
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
			<?php require_once 'Views/Template/Modals/modalCarrito.php';?>
		</div>
	</div>
</div>