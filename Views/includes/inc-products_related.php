<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">PRODUCTOS RELACIONADOS</h5>
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
									$tmp_prodsl1 = "";
									foreach($arrProductoD as $k => $v) {
										$prodsl1_id = $v['idproducto'];
										$rutaProducto = $v['ruta'];
										$prodsl1_name = $v['nombre'];
										$prodsl1_name_short = strlen($v['nombre']) >= 42 ? substr($v['nombre'], 0, 42) . "..." : $v['nombre'];
										$prodsl1_price = SMONEY . formatMoney($v['precio']);
										$prodsl1_link_addcart = openssl_encrypt($v['idproducto'], METHODENCRIPT, KEY);
										$path_linkurl = base_url() . '/tienda/producto/' . $v['idproducto'] . '/' . $rutaProducto;

										if(count($v['images']) > 0){
											$portada = $v['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
										
										$tmp_prodsl1 .= "
											<div class='product__item swiper-slide p-2 m-3 bg-white h-100 rounded item' style='height: 360px;'>
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
												<div class='product__content'>
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