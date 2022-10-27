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
<!-- PLUGINS AND ASSETS - HOME -->
<!-- PRELOADER FILES -->
<link rel="preload" href="<?= media();?>/js/plugins/jquery/jquery-1.12.4.min.js" as="script"/>
<!-- JQUERY COMPRESSED -->
<script type="text/javascript" src="<?= media();?>/js/plugins/jquery/jquery-1.12.4.min.js"></script>
<!-- INCLUIR OWL CAROUSEL 2 -->
<link rel="stylesheet" href="<?= media();?>/js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
<script type="text/javascript" src="<?= media();?>/js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
<!-- BANNERS - HOME -->
<div class="sec-banner bg0">
	<div class="container">
		<section class="section-slide">
			<div class="wrap-slick1">
				<div class="slick1">
					<?php
						$tmp_banners_h = "";
						foreach ($data['banners'] as $k => $v){
							$banners_row_1_img = $v['photo'];
							$tmp_banners_h .= "	
							<div class='item-slick1' style='background-image: url({$banners_row_1_img});'>
								<div class='container h-full'>
									<div class='flex-col-l-m h-full p-t-100 p-b-30 respon5'>
										<div class='layer-slick1 animated visible-false' data-appear='fadeInDown' data-delay='0'>
											<span class='ltext-101 cl2 respon2'>Descripción de Banner 1</span>
										</div>
										<div class='layer-slick1 animated visible-false' data-appear='fadeInUp' data-delay='800'>
											<h2 class='ltext-201 cl2 p-t-19 p-b-43 respon1'>Banner 1</h2>
										</div>
										<div class='layer-slick1 animated visible-false' data-appear='zoomIn' data-delay='1600'>
											<a href='javascript:void(0);' class='flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04'>
												Ver productos
											</a>
										</div>
									</div>
								</div>
							</div>
							";
						}
						echo $tmp_banners_h;
					?>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- FEATURES - HOME -->
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
<!-- CATEGORIES ROW 1 - HOME -->
<section class="topsell__area-2 pb-20">
	<div class="container">
		<div class="row container-cards-apple">
			<?php
				$tmp_categs_row_1 = "";
				foreach ($data['categorias'] as $k => $v){
					if($v['position'] == 1){					
						$categs_row_1_name = (strlen($v['nombre']) > 100) ? substr($v['nombre'], 0, 97) . '...' : $v['nombre'];
						$categs_row_1_desc = (strlen($v['descripcion']) > 100) ? substr($v['descripcion'], 0, 97) . '...' : $v['descripcion'];
						$categs_row_1_img = $v['portada'];
						$categs_row_1_linkfilter = base_url() . '/category/' . $v['idcategoria'];
						$tmp_categs_row_1 .= "
							<div class='col-sm-12 col-md-12 col-xl-4 col-lg-6'>
								<a href='{$categs_row_1_linkfilter}' title='{$categs_row_1_name}'>
									<div class='bg-white card-apple'>
										<h3 class='title-card-apple'>{$categs_row_1_name}</h3>
										<h4 class='sub-title-card-apple'></h4>
										<div class='img-card-apple'>
											<img style='border-radius: 0 0 8px 0'	src='{$categs_row_1_img}'	alt='{$categs_row_1_name}'>
										</div>
										<div class='btn-card-apple'>
											Ver productos </div>
									</div>
								</a>
							</div>
						";
					}
				}
				echo $tmp_categs_row_1;
			?>
		</div>
	</div>
</section>
<!-- PRODUCTS FILTER 1 - HOME -->
<section class="topsell__area-2 pt-15 mb-4">
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
				<div class="tab-content">
					<div class="tab-pane fade active show">
						<div class="product-bs-slider-2 c-contmlist cxhm_products-new-list_home">
							
							<div class="cxhm_products-new-list_home__cBtnIconSlide ps-x-left" id="arr-left__prods-new-l_home">
				        <span class="slider-arrow-left">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m202.88 254.85 244.79-244.79c14.25-13.414 36.047-13.414 49.461 0s13.414 35.211 0 49.461l-220.48 220.48 220.48 220.48c13.414 13.414 13.414 36.047 0 49.461-13.414 13.414-35.211 13.414-49.461 0l-244.79-245.63c-13.414-13.414-13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

							<div class="products-new-list_home owl-carousel owl-theme">
								<!-- <div class="swiper-wrapper"> -->
									<?php
									for ($p = 0; $p < count($arrProductos); $p++) {
										$rutaProducto = $arrProductos[$p]['ruta'];
										if (count($arrProductos[$p]['images']) > 0) {
											$portada = $arrProductos[$p]['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
									?>
										<div class="product__item swiper-slide p-2 bg-white h-100 rounded item" width="18rem" style="height: 360px;">
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
													</a>
												</div>
											</div>
											<div class="product__content m-1">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>
												<div class="rating mb-3">
													<ul>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="javascript:(0);" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>
										</div>
									<?php } ?>
								<!-- </div> -->
							</div>
							<!-- If we need navigation buttons -->
							<!-- <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div> -->

							<div class="cxhm_products-new-list_home__cBtnIconSlide ps-x-right" id="arr-right__prods-new-l_home">
				        <span class="slider-arrow-right">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m497.12 254.85-244.79-244.79c-14.25-13.414-36.047-13.414-49.461 0s-13.414 35.211 0 49.461l220.48 220.48-220.48 220.48c-13.414 13.414-13.414 36.047 0 49.461 13.414 13.414 35.211 13.414 49.461 0l244.79-245.63c13.414-13.414 13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- CATEGORIES ROW 2 - HOME -->
<div class="container">
	<div class="row container-cards-apple mb-4">
		<?php
				$tmp_categs_row_1 = "";
				foreach ($data['categorias'] as $k => $v){
					if($v['position'] == 2){					
						$categs_row_1_name = (strlen($v['nombre']) > 100) ? substr($v['nombre'], 0, 97) . '...' : $v['nombre'];
						$categs_row_1_desc = (strlen($v['descripcion']) > 100) ? substr($v['descripcion'], 0, 97) . '...' : $v['descripcion'];
						$categs_row_1_img = $v['portada'];
						$categs_row_1_linkfilter = base_url() . '/category/' . $v['idcategoria'];
						$tmp_categs_row_1 .= "
							<div class='col-sm-12 col-md-12 col-xl-4 col-lg-6'>
								<a href='{$categs_row_1_linkfilter}' title='{$categs_row_1_name}'>
									<div class='bg-white card-apple'>
										<h3 class='title-card-apple'>{$categs_row_1_name}</h3>
										<h4 class='sub-title-card-apple'></h4>
										<div class='img-card-apple'>
											<img style='border-radius: 0 0 8px 0'	src='{$categs_row_1_img}'	alt='{$categs_row_1_name}'>
										</div>
										<div class='btn-card-apple'>
											Ver productos </div>
									</div>
								</a>
							</div>
						";
					}
				}
				echo $tmp_categs_row_1;
			?>
	</div>
</div>
<!-- PRODUCTS FILTER 2 - HOME -->
<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">CARTERAS</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="tab-content">
					<div class="tab-pane fade active show">
						<div class="product-bs-slider-2 c-contmlist cxhm_products-new-1-list_home">
							
							<div class="cxhm_products-new-1-list_home__cBtnIconSlide ps-x-left" id="arr-left__prods-new-1-l_home">
				        <span class="slider-arrow-left">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m202.88 254.85 244.79-244.79c14.25-13.414 36.047-13.414 49.461 0s13.414 35.211 0 49.461l-220.48 220.48 220.48 220.48c13.414 13.414 13.414 36.047 0 49.461-13.414 13.414-35.211 13.414-49.461 0l-244.79-245.63c-13.414-13.414-13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

							<div class="products-new-1-list_home owl-carousel owl-theme">
								<!-- <div class="swiper-wrapper"> -->
									<?php
									for ($p = 0; $p < count($arrProductos); $p++) {
										$rutaProducto = $arrProductos[$p]['ruta'];
										if (count($arrProductos[$p]['images']) > 0) {
											$portada = $arrProductos[$p]['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
									?>
										<div class="product__item swiper-slide p-2 bg-white h-100 rounded item" width="18rem" style="height: 360px;">
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
													</a>
												</div>
											</div>
											<div class="product__content m-1">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>
												<div class="rating mb-3">
													<ul>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="javascript:(0);" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>
										</div>
									<?php } ?>
								<!-- </div> -->
							</div>
							<!-- If we need navigation buttons -->
							<!-- <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div> -->

							<div class="cxhm_products-new-1-list_home__cBtnIconSlide ps-x-right" id="arr-right__prods-new-1-l_home">
				        <span class="slider-arrow-right">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m497.12 254.85-244.79-244.79c-14.25-13.414-36.047-13.414-49.461 0s-13.414 35.211 0 49.461l220.48 220.48-220.48 220.48c-13.414 13.414-13.414 36.047 0 49.461 13.414 13.414 35.211 13.414 49.461 0l244.79-245.63c13.414-13.414 13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- PRODUCTS FILTER 3 - HOME -->
<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">JUGUETES</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="tab-content">
					<div class="tab-pane fade active show">
						<div class="product-bs-slider-2 c-contmlist cxhm_products-new-2-list_home">
							
							<div class="cxhm_products-new-2-list_home__cBtnIconSlide ps-x-left" id="arr-left__prods-new-2-l_home">
				        <span class="slider-arrow-left">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m202.88 254.85 244.79-244.79c14.25-13.414 36.047-13.414 49.461 0s13.414 35.211 0 49.461l-220.48 220.48 220.48 220.48c13.414 13.414 13.414 36.047 0 49.461-13.414 13.414-35.211 13.414-49.461 0l-244.79-245.63c-13.414-13.414-13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

							<div class="products-new-2-list_home owl-carousel owl-theme">
								<!-- <div class="swiper-wrapper"> -->
									<?php
									for ($p = 0; $p < count($arrProductos); $p++) {
										$rutaProducto = $arrProductos[$p]['ruta'];
										if (count($arrProductos[$p]['images']) > 0) {
											$portada = $arrProductos[$p]['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
									?>
										<div class="product__item swiper-slide p-2 bg-white h-100 rounded item" width="18rem" style="height: 360px;">
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
													</a>
												</div>
											</div>
											<div class="product__content m-1">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>
												<div class="rating mb-3">
													<ul>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
														<li><a href="javascript:(0);"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="javascript:(0);" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>
										</div>
									<?php } ?>
								<!-- </div> -->
							</div>
							<!-- If we need navigation buttons -->
							<!-- <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div> -->

							<div class="cxhm_products-new-2-list_home__cBtnIconSlide ps-x-right" id="arr-right__prods-new-2-l_home">
				        <span class="slider-arrow-right">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m497.12 254.85-244.79-244.79c-14.25-13.414-36.047-13.414-49.461 0s-13.414 35.211 0 49.461l220.48 220.48-220.48 220.48c-13.414 13.414-13.414 36.047 0 49.461 13.414 13.414 35.211 13.414 49.461 0l244.79-245.63c13.414-13.414 13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- TESTIMONIOS -->
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
			<div class="mb-4 pb-2 mb-md-5 pb-md-0"></div>
		</div>
	</div>
	<div class="row text-center">
		<?php 
			$tmp_testimonials = "";
			foreach($data['testimonials'] as $k => $v){
				$testimony_name = $v['cli_name'] . " " . $v['cli_lastname'];
				$testimony_userphoto = $v['cli_photo'];
				$testimony_desc = (strlen($v['text_text']) > 100) ? substr($v['text_text'], 0, 97) . '...' : $v['text_text'];
				$tmp_testimonials .= "
					<div class='col-md-4 mb-5 mb-md-0'>
						<div class='card testimonial-card'>
							<!--<div class='card-up' style='background-color: #9d789b;'></div>-->
							<div class='avatar bg-white'>
								<img src='{$testimony_userphoto}' alt='{$testimony_name}' class='rounded-circle img-fluid' />
							</div>
							<div class='card-body text-left'>
								<h4 class='mb-4'>{$testimony_name}</h4>
								<!-- <hr /> -->
								<p class='dark-grey-text mt-4'>
									<i class='fas fa-quote-left pe-2'></i>{$testimony_desc}
								</p>
								<div class='rating mb-3'>
									<ul>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				";
			}
			echo $tmp_testimonials;
		?>
	</div>
</section>
<!-- MARCAS -->
<section class="brand-area brand-area-d  mt-4">
	<div class="container">
		<div class="brand-slider swiper-container pt-50 pb-45">
			<div class="swiper-wrapper">
				<div class="brand-item w-img swiper-slide">
					<a href="javascript:(0);"><img src="<?= media(); ?>/images/brand/brand-1.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="javascript:(0);"><img src="<?= media(); ?>/images/brand/brand-2.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="javascript:(0);"><img src="<?= media(); ?>/images/brand/brand-3.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="javascript:(0);"><img src="<?= media(); ?>/images/brand/brand-4.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="javascript:(0);"><img src="<?= media(); ?>/images/brand/brand-5.jpg" alt="brand"></a>
				</div>
				<div class="brand-item w-img swiper-slide">
					<a href="javascript:(0);"><img src="<?= media(); ?>/images/brand/brand-6.jpg" alt="brand"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <div class="container text-center p-t-80 mb-5">
	<hr>
	<?= $contentPage ?>
</div> -->
<!-- SCRIPTS - HOME -->
<script type="text/javascript" src="<?= media();?>/js/actions/home_settings.js"></script>
<?php
footerTienda($data);
?>