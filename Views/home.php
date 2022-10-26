<?php
headerTienda($data);
$arrSlider = $data['slider'];
$arrBanner = $data['banner'];
$arrProductos = $data['productos'];

$contentPage = "";
if (!empty($data['page'])) {
	$contentPage = $data['page']['contenido'];
}

?>
<!-- Slider -->
<!-- <div class="sec-banner bg0"> -->
	<div class="">
		<section class="section-slide">
			<div class="wrap-slick1">
				<div class="slick1">
					<?php
					for ($i = 0; $i < count($arrSlider); $i++) {
						$ruta = $arrSlider[$i]['ruta'];
					?>
						<div class="item-slick1" style="background-image: url(<?= $arrSlider[$i]['portada'] ?>);">
							<div class="container h-full">
								<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
									<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
										<span class="ltext-101 cl2 respon2">
											<?= $arrSlider[$i]['descripcion'] ?>
										</span>
									</div>

									<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
										<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
											<?= $arrSlider[$i]['nombre'] ?>
										</h2>
									</div>

									<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
										<a href="<?= base_url() . '/tienda/categoria/' . $arrSlider[$i]['idcategoria'] . '/' . $ruta; ?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
											Ver productos
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</section>
	</div>
<!-- </div> -->



<!-- features__area-start -->
<section class="mt-4 mb-4  features__area pt-20">
	<div class="container bg-white">
		<div class="row">
			<div class="col pr-0 pl-0">
				<div class="features__item d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fal fa-truck"></i>
					</div>
					<div class="features__content">
						<h6>FREE DELIVERY</h6>
						<p>For all orders over $120</p>
					</div>
				</div>
			</div>
			<div class="col pr-0 pl-0">
				<div class="features__item d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fal fa-money-check"></i>
					</div>
					<div class="features__content">
						<h6>SAFE PAYMENT</h6>
						<p>100% secure payment</p>
					</div>
				</div>
			</div>
			<div class="col pr-0 pl-0">
				<div class="features__item d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fal fa-comments-alt"></i>
					</div>
					<div class="features__content">
						<h6>24/7 HELP CENTER</h6>
						<p>Delicated 24/7 support</p>
					</div>
				</div>
			</div>
			<div class="col pr-0 pl-0">
				<div class="features__item features__item-last d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fad fa-user-headset"></i>
					</div>
					<div class="features__content">
						<h6>FRIENDLY SERVICES</h6>
						<p>30 day satisfaction guarantee</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- features__area-end-->

 

<!-- categorias -->
<section class="topsell__area-2 pb-20">
	<div class="container">
	<div class="row container-cards-apple">
			<!-- <div class="banners-apple"> -->
				<div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
					<a href="#"
						title="Electrónica y tecnología">
						<div class="bg-white card-apple">
							<h3 class="title-card-apple">Electrónica y tecnología</h3>
							<h4 class="sub-title-card-apple"></h4>
							<div class="img-card-apple">
								<img style="border-radius: 0 0 8px 0"
									src="https://images.tiendamia.com/materiales/peru/2022/Septiembre/Categorias%20home/pe_categorias_tecnologia_187x270-min.png"
									alt="Electrónica y tecnología">
							</div>
							<div class="btn-card-apple"> Ver productos </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
					<a href="#"
						title="Electrónica y tecnología">
						<div class="bg-white card-apple">
							<h3 class="title-card-apple">Electrónica y tecnología</h3>
							<h4 class="sub-title-card-apple"></h4>
							<div class="img-card-apple">
								<img style="border-radius: 0 0 8px 0"
									src="https://images.tiendamia.com/materiales/peru/2022/Septiembre/Categorias%20home/pe_categorias_tecnologia_187x270-min.png"
									alt="Electrónica y tecnología">
							</div>
							<div class="btn-card-apple">
								Ver productos </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
					<a href="#"
						title="Electrónica y tecnología">
						<div class="bg-white card-apple">
							<h3 class="title-card-apple">Electrónica y tecnología</h3>
							<h4 class="sub-title-card-apple"></h4>
							<div class="img-card-apple">
								<img style="border-radius: 0 0 8px 0"
									src="https://images.tiendamia.com/materiales/peru/2022/Septiembre/Categorias%20home/pe_categorias_tecnologia_187x270-min.png"
									alt="Electrónica y tecnología">
							</div>
							<div class="btn-card-apple">
								Ver productos </div>
						</div>
					</a>
				</div>
			<!-- </div> -->
	</div>
	</div>


</section>
<!-- categorias -->

<!-- Product -->
<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">PRODUCTOS NUEVOS</h5>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="tab-content" id="flast-sell-tabContent">
					<div class="tab-pane fade active show" id="computer" role="tabpanel" aria-labelledby="computer-tab">
						<div class="product-bs-slider-2">
							<div class="product-slider-2 swiper-container">
								<div class="swiper-wrapper">

									<?php
									for ($p = 0; $p < count($arrProductos); $p++) {
										$rutaProducto = $arrProductos[$p]['ruta'];
										if (count($arrProductos[$p]['images']) > 0) {
											$portada = $arrProductos[$p]['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
									?>



										<div class="product__item swiper-slide p-2 m-3 bg-white h-100 rounded" width="18rem" style="height: 360px;">
											<div class="product__thumb fix">
												<div class="product-image w-img">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>">
														<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
													</a>
												</div>
												<div class="product__offer">
													<span class="discount">-15%</span>
												</div>
												<div class="product-action">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
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
											<div class="product__content m-1">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>
													<hr>
												<div class="rating mb-3">
													<ul>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>

										</div>


									<?php } ?>


								</div>
							</div>
							<!-- If we need navigation buttons -->
							<div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>
<!-- Product -->


<div class="container">
	<div class="row container-cards-apple">
			<!-- <div class="banners-apple"> -->
				<div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
					<a href="#"
						title="Electrónica y tecnología">
						<div class="bg-white card-apple">
							<h3 class="title-card-apple">Electrónica y tecnología</h3>
							<h4 class="sub-title-card-apple"></h4>
							<div class="img-card-apple">
								<img style="border-radius: 0 0 8px 0"
									src="https://images.tiendamia.com/materiales/peru/2022/Septiembre/Categorias%20home/pe_categorias_tecnologia_187x270-min.png"
									alt="Electrónica y tecnología">
							</div>
							<div class="btn-card-apple"> Ver productos </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
					<a href="#"
						title="Electrónica y tecnología">
						<div class="bg-white card-apple">
							<h3 class="title-card-apple">Electrónica y tecnología</h3>
							<h4 class="sub-title-card-apple"></h4>
							<div class="img-card-apple">
								<img style="border-radius: 0 0 8px 0"
									src="https://images.tiendamia.com/materiales/peru/2022/Septiembre/Categorias%20home/pe_categorias_tecnologia_187x270-min.png"
									alt="Electrónica y tecnología">
							</div>
							<div class="btn-card-apple">
								Ver productos </div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
					<a href="#"
						title="Electrónica y tecnología">
						<div class="bg-white card-apple">
							<h3 class="title-card-apple">Electrónica y tecnología</h3>
							<h4 class="sub-title-card-apple"></h4>
							<div class="img-card-apple">
								<img style="border-radius: 0 0 8px 0"
									src="https://images.tiendamia.com/materiales/peru/2022/Septiembre/Categorias%20home/pe_categorias_tecnologia_187x270-min.png"
									alt="Electrónica y tecnología">
							</div>
							<div class="btn-card-apple">
								Ver productos </div>
						</div>
					</a>
				</div>
			<!-- </div> -->
	</div>
</div>

<!-- Product -->
<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">PRODUCTOS NUEVOS</h5>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="tab-content" id="flast-sell-tabContent">
					<div class="tab-pane fade active show" id="computer" role="tabpanel" aria-labelledby="computer-tab">
						<div class="product-bs-slider-2">
							<div class="product-slider-2 swiper-container">
								<div class="swiper-wrapper">

									<?php
									for ($p = 0; $p < count($arrProductos); $p++) {
										$rutaProducto = $arrProductos[$p]['ruta'];
										if (count($arrProductos[$p]['images']) > 0) {
											$portada = $arrProductos[$p]['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
									?>



										<div class="product__item swiper-slide p-2 m-3 bg-white h-100 rounded" width="18rem" style="height: 360px;">
											<div class="product__thumb fix">
												<div class="product-image w-img">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>">
														<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
													</a>
												</div>
												<div class="product__offer">
													<span class="discount">-15%</span>
												</div>
												<div class="product-action">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
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
											<div class="product__content m-1">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>
													<hr>
												<div class="rating mb-3">
													<ul>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>

										</div>


									<?php } ?>


								</div>
							</div>
							<!-- If we need navigation buttons -->
							<div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>
<!-- Product -->


<!-- Product -->
<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">PRODUCTOS NUEVOS</h5>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="tab-content" id="flast-sell-tabContent">
					<div class="tab-pane fade active show" id="computer" role="tabpanel" aria-labelledby="computer-tab">
						<div class="product-bs-slider-2">
							<div class="product-slider-2 swiper-container">
								<div class="swiper-wrapper">

									<?php
									for ($p = 0; $p < count($arrProductos); $p++) {
										$rutaProducto = $arrProductos[$p]['ruta'];
										if (count($arrProductos[$p]['images']) > 0) {
											$portada = $arrProductos[$p]['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
									?>



										<div class="product__item swiper-slide p-2 m-3 bg-white h-100 rounded" width="18rem" style="height: 360px;">
											<div class="product__thumb fix">
												<div class="product-image w-img">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>">
														<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
													</a>
												</div>
												<div class="product__offer">
													<span class="discount">-15%</span>
												</div>
												<div class="product-action">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
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
											<div class="product__content m-1">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>
													<hr>
												<div class="rating mb-3">
													<ul>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>

										</div>


									<?php } ?>


								</div>
							</div>
							<!-- If we need navigation buttons -->
							<div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</section>
<!-- Product -->


<!-- COMENTARIOS -->
<section class="container mt-3">
	<div class="row">
		<div class="col-xl-12">
			<div class="section__head d-flex justify-content-between mb-10">
				<div class="section__title">
					<h5 class="st-titile">TESTIMONIOS</h5>

				</div>

			</div>
		</div>
	</div>
	<div class="row d-flex">
		<div class="col-md-10 col-xl-8 text-left mb-4">
			<p class="mb-4 pb-2 mb-md-5 pb-md-0">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
				numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
				quisquam eum porro a pariatur veniam.
			</p>
		</div>
	</div>

	<div class="row text-center">
		<div class="col-md-4 mb-5 mb-md-0">
			<div class="card testimonial-card">
				<!-- <div class="card-up" style="background-color: #9d789b;"></div> -->
				<div class="avatar bg-white">
					<img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-File.png" class="rounded-circle img-fluid" />
				</div>
				<div class="card-body text-left">
					<h4 class="mb-4">Maria Smantha</h4>
					<!-- <hr /> -->
					<p class="dark-grey-text mt-4">
						<i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
						consectetur adipisicing elit.
					</p>
					<div class="rating mb-3">
						<ul>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-5 mb-md-0">
			<div class="card testimonial-card">
				<!-- <div class="card-up" style="background-color: #7a81a8;"></div> -->
				<div class="avatar bg-white">
					<img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-File.png" class="rounded-circle img-fluid" />
				</div>
				<div class="card-body text-left">
					<h4 class="mb-4">Lisa Cudrow</h4>
					<!-- <hr /> -->
					<p class="dark-grey-text mt-4">
						<i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
						repudi mollitia architecto.
					</p>
					<div class="rating mb-3">
						<ul>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-0">
			<div class="card testimonial-card">
				<!-- <div class="card-up" style="background-color: #6d5b98;"></div> -->
				<div class="avatar bg-white">
					<img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-File.png" class="rounded-circle img-fluid" />
				</div>
				<div class="card-body text-left">
					<h4 class="mb-4">John Smith</h4>
					<!-- <hr /> -->
					<p class="dark-grey-text mt-4">
						<i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
						aliquam repellat rem unde ducimus.
					</p>
					<div class="rating mb-3">
						<ul>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fal fa-star" aria-hidden="true"></i></a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- COMENTARIOS -->

<!-- MARCAS -->

<!-- brand-area-start -->
<section class="brand-area brand-area-d  mt-4">
	<div class="container">
		<div class="brand-slider swiper-container pt-50 pb-45">
			<div class="swiper-wrapper">
				<div class="brand-item w-img swiper-slide">
					<a href="#"><img src="<?= media(); ?>/images/brand/brand-1.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="#"><img src="<?= media(); ?>/images/brand/brand-2.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="#"><img src="<?= media(); ?>/images/brand/brand-3.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="#"><img src="<?= media(); ?>/images/brand/brand-4.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="#"><img src="<?= media(); ?>/images/brand/brand-5.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="#"><img src="<?= media(); ?>/images/brand/brand-6.jpg" alt="brand"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- brand-area-end -->
<!-- MARCAS -->


<!-- <div class="container text-center p-t-80 mb-5">
		<hr>
		<?= $contentPage ?>
</div> -->


<?php
footerTienda($data);
?>


<style type="text/css">
	.flex-col-l-m.h-full.p-t-100.p-b-30.respon5 {
		display: none;
	}
</style>