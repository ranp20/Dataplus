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
						<div class="c-contmlist cxhm_products-new-list_home">
							
							<div class="cxhm_products-new-list_home__cBtnIconSlide ps-x-left" id="arr-left__prods-new-l_home">
				        <span class="slider-arrow-left">
				          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m202.88 254.85 244.79-244.79c14.25-13.414 36.047-13.414 49.461 0s13.414 35.211 0 49.461l-220.48 220.48 220.48 220.48c13.414 13.414 13.414 36.047 0 49.461-13.414 13.414-35.211 13.414-49.461 0l-244.79-245.63c-13.414-13.414-13.414-35.211 0-49.461z" fill-rule="evenodd"/></g></svg>
				        </span>
				      </div>

							<div class="products-new-list_home owl-carousel owl-theme">
								<?php
									$tmp_prodsl1 = "";
									foreach($arrProductos as $k => $v) {
										$prodsl1_id = $v['idproducto'];
										$rutaProducto = $v['ruta'];
										$prodsl1_name = $v['nombre'];
										$prodsl1_name_short = strlen($v['nombre']) >= 42 ? substr($v['nombre'], 0, 42) . "..." : $v['nombre'];
										$prodsl1_price = SMONEY . formatMoney($v['precio']);
										$prodsl1_link_addcart = openssl_encrypt($v['idproducto'], METHODENCRIPT, KEY);
										$path_linkurl = base_url() . '/producto/' . $v['idproducto'] . '/' . $rutaProducto;

										if(count($v['images']) > 0){
											$portada = $v['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
										
										$tmp_prodsl1 .= "
											<div class='product__item swiper-slide p-2 bg-white h-100 rounded item' width='18rem' style='height: 360px;'>
												<div class='product__thumb fix'>
													<div class='product-image w-img'>
														<a href='{$path_linkurl}'>
															<img src='{$portada}' alt='{$prodsl1_name}'>
														</a>
													</div>
													<div class='product__offer'>
														<span class='discount'>-15%</span>
													</div>
													<!--
													<div class='product-action'>
														<a href='{$path_linkurl}' class='icon-box icon-box-1' data-bs-toggle='modal' data-bs-target='#productModalId'>
															<i class='fal fa-eye'></i>
														</a>
													</div>
													-->
												</div>
												<div class='product__content m-1'>
													<a href='{$path_linkurl}' class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
														{$prodsl1_name_short}
													</a>
													<div class='price'>
														<span>{$prodsl1_price}</span>
													</div>
												</div>
												<!--
												<div class='product__add-cart text-center'>
													<a id='{$prodsl1_link_addcart}' href='javascript:(0);' class='btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center '>
														Agregar al carrito
													</a>
												</div>
												-->
												<div class='product__viewdetails text-center'>
													<a href='{$path_linkurl}' class='dis-block pos-relative cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center'>
														<span>VER PRODUCTO</span>
													</a>
												</div>
											</div>
										";
									}
									echo $tmp_prodsl1;
								?>
							</div>

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