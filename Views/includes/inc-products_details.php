<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg mb-3">
		<a href="<?= base_url(); ?>" class="stext-109 cl8 hov-cl1 trans-04">
			<span>Inicio</span>
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<a href="<?= base_url() . '/categoria/' . $rutacategoria; ?>" class="stext-109 cl8 hov-cl1 trans-04">
			<span><?= $arrProductoD[0]['categoria'] ?></span>
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<span class="stext-109 cl4">
			<span><?= $arrProductoD[0]['nombre'];?></span>
		</span>
	</div>
</div>
<main>
	<div class="product-details mb-4">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="product__details-nav d-sm-flex align-items-start">
						<ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
							<?php
								$tmp_proddet_imgs = "";
								$count_imgss = 0;
								if(!empty($arrImages)){
									foreach ($arrImages as $k => $v){
										if($count_imgss < count($arrImages)){
											$count_imgss++;
											$imgss = ($count_imgss != 1) ? '' : 'active';
											$proddet_url = $v['url_image'];

											$tmp_proddet_imgs .= "
												<li class='nav-item' role='presentation' data-thumb='{$proddet_url}'>
													<button class='nav-link {$imgss}' id='thumbOne-tab-{$count_imgss}' data-bs-toggle='tab' data-bs-target='#thumbOne-{$count_imgss}' type='button' role='tab' aria-controls='thumbOne-{$count_imgss}' aria-selected='true'>
														<img class='img-fluid' src='{$proddet_url}' alt='{$arrProductoD[0]['nombre']}' width='85px'>
													</button>
												</li>
											";
										}
									}
								}
								echo $tmp_proddet_imgs;
							?>
						</ul>
						<div class="product__details-thumb">
							<div class="tab-content" id="productThumbContent">
								<?php 
									$tmp_proddet_imgs_giant = "";
									$count_imgss_2 = 0;
									if(!empty($arrImages)){
										foreach($arrImages as $k => $v){
											if($count_imgss_2 < count($arrImages)){
												$count_imgss_2++;
												$imgss = ($count_imgss_2 != 1) ? '' : 'active';
												$proddet_url = $v['url_image'];

												$tmp_proddet_imgs_giant .= "
													<div class='tab-pane fade show {$imgss}' id='thumbOne-{$count_imgss_2}' role='tabpanel' aria-labelledby='thumbOne-tab-{$count_imgss_2}'>
														<div class='product__details-nav-thumb w-100'>
															<img class='product__details-nav-thumb--img small-preview img-fluid' src='{$proddet_url}' alt='{$arrProductoD[0]['nombre']}'>
															<div class='zoomed-image'></div>
														</div>
													</div>
												";
											}
										}
									}
									echo $tmp_proddet_imgs_giant;
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="product__details-content">
						<h6><?= $arrProductoD[0]['nombre']; ?></h6>
						<div class="price mb-10">
							<span><?= SMONEY . formatMoney($arrProductoD[0]['precio']); ?></span>
						</div>
						<!-- 
						<div class="features-des mb-20 mt-10">
							<?= $arrProductoD[0]['descripcion']; ?>
						</div>
						 -->
						<div class="product-stock mb-20">
							<h5>Disponible: <span> 940 en stock</span></h5>
						</div>
						<div class="cart-option mb-15">
							<!-- 
							<div class="product-quantity mr-20">
								<div class="cart-plus-minus p-relative">
									<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">
									<div class="dec qtybutton btn-num-product-down">-</div>
									<div class="inc qtybutton btn-num-product-up">+</div>
								</div>
							</div>
							 -->
							<div class="product-quantity-container col-4 d-flex align-items-center justify-content-center" id="chk_selquantity">
                <label for="product-quantity"></label>
			          <div class="select-dropdown select-dropdown-product-quantity w-100">
			          	<select id="product-quantity" class="form-control form-control-lg hidden-md-up">
			          		<option value="1">1</option>
			          		<option value="2">2</option>
			          		<option value="3">3</option>
			          		<option value="4">4</option>
			          		<option value="5">5</option>
			          		<option value="6">6</option>
			          	</select>
			          </div>
			        </div>
			        <div class="col-8">
								<button id="<?= openssl_encrypt($arrProductoD[0]['idproducto'], METHODENCRIPT, KEY); ?>" class="cart-btn js-addcart-detail">Agregar al carrito</button>
			        </div>
						</div>
						<div class="product-tag-area mt-15">
							<div class="product_info">
								<span class="sku_wrapper">
									<span class="title">SKU:</span>
									<span class="sku">DK1002</span>
								</span>
								<span class="posted_in">
									<span class="title">Categories:</span>
									<a href="javascript:void(0);">iPhone</a>
									<a href="javascript:void(0);">Tablets</a>
								</span>
								<span class="tagged_as">
									<span class="title">Tags:</span>
									<a href="javascript:void(0);">Smartphone</a>,
									<a href="javascript:void(0);">Tablets</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cM-prod-det__tabs">
		<div class="container cM-prod-det__tabs__c">
			<div class="cM-prod-det__tabs__c__m tab-links-prodDetails" id="tab-links-prodDetails">
				<div class="cM-prod-det__tabs__c__m--i" data-tab-custom="#anch-tab__detail">
					<span>Detalle</span>
				</div>
				<div class="cM-prod-det__tabs__c__m--i" data-tab-custom="#anch-tab__description">
					<span>Descripción</span>
				</div>
				<div class="cM-prod-det__tabs__c__m--i" data-tab-custom="#anch-tab__comments">
					<span>Comentarios</span>
				</div>
			</div>
		</div>
	</div>
	<div class="cM-prod-det__anchors product-details-des mb-60">
		<div class="container cM-prod-det__anchors__c">
			<div class="cM-prod-det__anchors__c__m">			
				<div class="info-1 cM-prod-det__anchors__c__m--i active" data-tab-ctDet="tab" id="anch-tab__detail">
					<div class="row">
						<div class="col-xl-12">
							<div class="section__head d-flex justify-content-between mb-10">
								<div class="section__title">
									<h5 class="st-titile">DETALLE DEL PRODUCTO</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="product__desc-info">
						<ul>
							<li>
								<h6>Weight</h6>
								<span>2 lbs</span>
							</li>
							<li>
								<h6>Dimensions</h6>
								<span>12 × 16 × 19 in</span>
							</li>
							<li>
								<h6>Product</h6>
								<span>Purchase this product on rag-bone.com</span>
							</li>
							<li>
								<h6>Color</h6>
								<span>Gray, Black</span>
							</li>
							<li>
								<h6>Size</h6>
								<span>S, M, L, XL</span>
							</li>
							<li>
								<h6>Model</h6>
								<span>Model </span>
							</li>
							<li>
								<h6>Shipping</h6>
								<span>Standard shipping: $5,95</span>
							</li>
							<li>
								<h6>Care Info</h6>
								<span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
							</li>
							<li>
								<h6>Brand</h6>
								<span>Kazen</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="info-2 cM-prod-det__anchors__c__m--i" data-tab-ctDet="tab" id="anch-tab__description">
					<div class="product__details-des-wrapper">
						<div class="row">
							<div class="col-xl-12">
								<div class="section__head d-flex justify-content-between mb-10">
									<div class="section__title">
										<h5 class="st-titile">DESCRIPCIÓN DEL PRODUCTO</h5>
									</div>
								</div>
							</div>
						</div>
						<p class="des-text mb-35">Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.</p>
					</div>
				</div>
				<div class="info-3 cM-prod-det__anchors__c__m--i" data-tab-ctDet="tab" id="anch-tab__comments">
					<div class="row">
						<div class="col-xl-12">
							<div class="section__head d-flex justify-content-between mb-10">
								<div class="section__title">
									<h5 class="st-titile">RESEÑA DEL PRODUCTO</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="product__details-review">
						<div class="row">
							<div class="col-xl-4">
								<div class="review-rate">
									<h5>5.00</h5>
									<div class="review-star">
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
									</div>
									<span class="review-count">01 Review</span>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="review-des-infod">
									<h6>1 review for "<span>Wireless Bluetooth Over-Ear Headphones</span>"</h6>
									<div class="review-details-des">
										<div class="author-image mr-15">
											<a href="javascript:void(0);"><img src="<?= media(); ?>/images/author/author-sm-1.jpeg" alt=""></a>
										</div>
										<div class="review-details-content">
											<div class="str-info">
												<div class="review-star mr-15">
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
												</div>
												<div class="add-review-option">
													<a href="javascript:void(0);">Add Review</a>
												</div>
											</div>
											<div class="name-date mb-30">
												<h6> admin – <span> May 27, 2021</span></h6>
											</div>
											<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="product__details-comment ">
									<div class="comment-title mb-20">
										<h3>Add a review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="comment-rating mb-20">
										<span>Overall ratings</span>
										<ul>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
										</ul>
									</div>
									<div class="comment-input-box">
										<form action="#">
											<div class="row">
												<div class="col-xxl-6 col-xl-6">
													<div class="comment-input">
														<input type="text" placeholder="Your Name">
													</div>
												</div>
												<div class="col-xxl-6 col-xl-6">
													<div class="comment-input">
														<input type="email" placeholder="Your Email">
													</div>
												</div>
												<div class="col-xxl-12">
													<textarea placeholder="Your review" class="comment-input comment-textarea"></textarea>
												</div>
												<div class="col-xxl-12">
													<div class="comment-agree d-flex align-items-center mb-25">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
															<label class="form-check-label" for="flexCheckDefault">
																Save my name, email, and website in this browser for the next time I comment.
															</label>
														</div>
													</div>
												</div>
												<div class="col-xxl-12">
													<div class="comment-submit">
														<button type="submit" class="cart-btn">Submit</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>